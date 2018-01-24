# ApiLog
记录接口请求日志

## Steps

```bash
composer require eugene/apilog
```

add the line in config/app.php
```php
Eugene\ApiLog\RecordProvider::class,
```

执行数据库迁移，生成数据表visit_log
```bash
php artisan migrate
```

在你的路由上添加中间件 api.log
```php
Route::any('for',function(){
    return 'bar';
})->middleware('api.log');
```



update 20180124