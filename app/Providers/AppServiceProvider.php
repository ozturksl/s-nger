<?php

namespace App\Providers;

use App\Models\ContentModel;
use App\Models\ProductCategoriesModel;
use App\Models\ProductModel;
use App\Models\UsersModel;
use App\Models\UserStatusModel;
use App\Models\UserTypeModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        View::composer(['partials.footer', 'front.contact'], function ($view) {
            $view->with('content', ContentModel::all());
        });

        View::composer(['layouts.layout', 'partials.footer', 'partials.header', 'lpanel.front.seosetting'], function ($view) {
            $seoData = DB::table('seo')
                ->select('seo_favicon', 'seo_icon', 'seo_comment', 'seo_keys')
                ->first();

            if (! $seoData) {
                $seoData = (object) [
                    'seo_favicon' => '',
                    'seo_icon' => '',
                    'seo_comment' => '',
                    'seo_keys' => '',
                ];
            }

            $view->with('seoData', $seoData);
        });

        View::composer(['lpanel.front.useradd', 'lpanel.front.userupdate', 'lpanel.front.usersetting'], function ($view) {
            $userId = request()->route('id');
            $user = UsersModel::where('user_id', $userId)->first();
            $view->with('user', $user);
        });

        View::composer(['lpanel.front.useradd', 'lpanel.front.userupdate'], function ($view) {
            $userType = UserTypeModel::select('usertype_name', 'usertype_id')->get();
            $view->with('usertype', $userType);
        });

        View::composer(['lpanel.front.useradd', 'lpanel.front.userupdate'], function ($view) {
            $userStatus = UserStatusModel::select('user_status_name', 'user_status_id')->get();
            $view->with('userstatus', $userStatus);
        });

        View::composer(['lpanel.front.categorysetting', 'lpanel.front.categoryupdate', 'lpanel.front.categoryadd'], function ($view) {
            $categories = ProductCategoriesModel::select('category_name', 'category_id')->get();
            $view->with('categories', $categories);
        });

         View::composer(['lpanel.front.productsetting', 'lpanel.front.productupdate', 'lpanel.front.productadd'], function ($view) {
            $categories = ProductModel::select('category_name', 'category_id')->get();
            $view->with('categories', $categories);
        });

    }
}
