# lxy/lxyjunit-laravel

这是学习php扩展开发

# 对于框架的要求

Laravel >= 5.1 && php >= 7.1.3

# 安装的方式

```yml
composer require "lxy/lxyjunit-laravel"
```

# 配置方式
laravel5.5以下需要手动配置config/app.php

```php
\Lxy\LxyjunitLaravel\Providers\LxyjunitServiceProvider::class
```

#解释路由
```php
Route::get('/', 'LxyjunitController@index');
Route::post('/', 'LxyjunitController@store')->name('junit.store');

// 测试路由
Route::get('test', 'TestController@index');
```
