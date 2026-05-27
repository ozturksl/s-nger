<nav class="navbar navbar-light bg-light custom-border-bottom bg-white py-3">
  <div class="container-fluid">
    <a class="navbar-brand ps-4">Hoş Geldiniz, <b>{{ Auth::user()?->user_name ?? 'Misafir Kullanıcı' }}</b></a>
  </div>
</nav>