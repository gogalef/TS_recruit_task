<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Пространство имен контроллеров для маршрутов API.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Регистрация любых служб/сервисов.
     *
     * @return void
     */
    public function register()
    {
        // Здесь можно регистрировать любые зависимости или конфигурации
    }

    /**
     * Выполнение действий при загрузке (например, подключение маршрутов, middleware и т.д.).
     *
     * @return void
     */
    public function boot()
    {
        // Регистрация alias для middleware
        $this->app['router']->aliasMiddleware('auth.api', \App\Http\Middleware\AuthApi::class);

        // Подключение маршрутов API
        $this->mapApiRoutes();
    }

    /**
     * Подключение маршрутов API.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')  // Префикс URL для API
        ->middleware(['api', 'auth.api'])  // Применяем middleware 'api' и 'auth.api'
        ->namespace($this->namespace)  // Пространство имен для контроллеров
        ->group(base_path('routes/api.php'));  // Подключаем файл маршрутов
    }
}
