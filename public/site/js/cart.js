
class Cart {
    constructor() {
        this.items = this.loadCart();
        this.STORAGE_KEY = 'shopping_cart';
    }

    loadCart() {
        const stored = localStorage.getItem(this.STORAGE_KEY);
        return stored ? JSON.parse(stored) : [];
    }

    saveCart() {
        localStorage.setItem(this.STORAGE_KEY, JSON.stringify(this.items));
    }

    addItem(product) {
        const existingItem = this.items.find(item => item.id === product.id);
        
        if (existingItem) {
            existingItem.quantity += product.quantity || 1;
        } else {
            this.items.push({
                id: product.id,
                name: product.name,
                price: product.price,
                image: product.image || 'https://via.placeholder.com/100',
                quantity: product.quantity || 1
            });
        }
        
        this.saveCart();
        this.showNotification(`${product.name} sepete eklendi!`);
        this.updateDisplay();
    }

    removeItem(productId) {
        this.items = this.items.filter(item => item.id !== productId);
        this.saveCart();
        this.updateDisplay();
    }

    updateQuantity(productId, quantity) {
        const item = this.items.find(item => item.id === productId);
        if (item) {
            if (quantity <= 0) {
                this.removeItem(productId);
            } else {
                item.quantity = quantity;
                this.saveCart();
                this.updateDisplay();
            }
        }
    }

    getTotal() {
        return this.items.reduce((total, item) => total + (item.price * item.quantity), 0);
    }

    getItemCount() {
        return this.items.reduce((count, item) => count + item.quantity, 0);
    }

    clearCart() {
        this.items = [];
        this.saveCart();
        this.updateDisplay();
    }

    updateDisplay() {
        this.renderCart();
        this.updateCartBadge();
        this.updateSummary();
    }

    showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'alert alert-success alert-dismissible fade show';
        notification.role = 'alert';
        notification.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        const container = document.querySelector('body');
        container.insertBefore(notification, container.firstChild);
        
        setTimeout(() => notification.remove(), 3000);
    }
}

let cart = new Cart();

document.addEventListener('DOMContentLoaded', function() {
    renderCart();
    updateCartBadge();
});

function renderCart() {
    const cartItemsContainer = document.getElementById('cartItems');
    const emptyCartMessage = document.getElementById('emptyCart');
    const cartTable = document.getElementById('cartTable');

    // Eğer sepet sayfasında değilsek, hiçbir şey yapma
    if (!cartItemsContainer || !emptyCartMessage || !cartTable) {
        return;
    }

    if (cart.items.length === 0) {
        cartItemsContainer.innerHTML = '';
        cartTable.style.display = 'none';
        emptyCartMessage.style.display = 'block';
    } else {
        cartTable.style.display = 'table';
        emptyCartMessage.style.display = 'none';
        
        cartItemsContainer.innerHTML = cart.items.map(item => `
            <tr>
                <td>
                    <div class="product-item">
                        <img src="${item.image}" alt="${item.name}">
                        <span class="product-name">${item.name}</span>
                    </div>
                </td>
                <td>₺${parseFloat(item.price).toFixed(2)}</td>
                <td>
                    <div class="quantity-control">
                        <button class="btn btn-sm btn-outline-secondary" onclick="updateItemQuantity(${item.id}, ${item.quantity - 1})">−</button>
                        <input type="number" class="form-control form-control-sm text-center" value="${item.quantity}" onchange="updateItemQuantity(${item.id}, this.value)">
                        <button class="btn btn-sm btn-outline-secondary" onclick="updateItemQuantity(${item.id}, ${item.quantity + 1})">+</button>
                    </div>
                </td>
                <td>₺${(item.price * item.quantity).toFixed(2)}</td>
                <td>
                    <button class="btn-delete" onclick="removeFromCart(${item.id})">Sil</button>
                </td>
            </tr>
        `).join('');
    }

    updateSummary();
}

function updateSummary() {
    const itemCount = document.getElementById('itemCount');
    const subtotal = document.getElementById('subtotal');
    const shipping = document.getElementById('shipping');
    const total = document.getElementById('total');

    if (!itemCount || !subtotal || !shipping || !total) {
        return;
    }

    itemCount.textContent = cart.getItemCount();
    
    const subtotalAmount = cart.getTotal();
    const shippingAmount = subtotalAmount > 0 ? 50 : 0; // Sabit kargo ücreti
    const totalAmount = subtotalAmount + shippingAmount;

    subtotal.textContent = `₺${subtotalAmount.toFixed(2)}`;
    shipping.textContent = `₺${shippingAmount.toFixed(2)}`;
    total.textContent = `₺${totalAmount.toFixed(2)}`;
}

function updateCartBadge() {
    const badges = document.querySelectorAll('[data-cart-count]');
    badges.forEach(badge => {
        badge.textContent = cart.getItemCount();
    });
}

function addToCart(productId, productName, productPrice, productImage = null) {
    cart.addItem({
        id: productId,
        name: productName,
        price: parseFloat(productPrice),
        image: productImage
    });
}

function removeFromCart(productId) {
    if (confirm('Bu ürünü sepetten çıkarmak istediğinize emin misiniz?')) {
        cart.removeItem(productId);
    }
}

function updateItemQuantity(productId, quantity) {
    quantity = parseInt(quantity);
    if (quantity < 1) quantity = 1;
    cart.updateQuantity(productId, quantity);
}
