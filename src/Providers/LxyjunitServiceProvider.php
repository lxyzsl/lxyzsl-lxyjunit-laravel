<?php
namespace Lxy\LxyjunitLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class LxyjunitServiceProvider extends ServiceProvider
{
    public function register()
    {
//        echo '这是自定义组件的服务提供者';
        $this->registerRoutes();
        // 指定的组件的名称，自定义的资源目录地址
        $this->loadViewsFrom(
            __DIR__.'/../../resource/views', 'lxyjunit'
        );
    }

    public function boot()
    {

    }

    // 参考别人的写法
    // 对于源码熟悉更好一些
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
//            $this->loadRoutesFrom(dirname(__DIR__).'/Http/route.php');
            $this->loadRoutesFrom(__DIR__.'/../Http/route.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            // 定义访问路由的域名
            // 'domain' => config('telescope.domain', null),
            // 是定义路由的命名空间
            'namespace' => 'Lxy\LxyjunitLaravel\Http\Controller',
            // 这是前缀
            'prefix' => 'lxyjunit',
            // 这是中间件
            'middleware' => 'web',
        ];
    }
}
