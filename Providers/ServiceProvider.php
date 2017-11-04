<?php

namespace Unet\Module\Providers;

/**
 * Class ServiceProvider
 * @package Unet\Module\Providers
 */
class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    const IDENTIFY = 'Module';

    /**
     * ServiceProvider constructor.
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public function __construct(
        \Illuminate\Contracts\Foundation\Application $app
    ) {
        parent::__construct($app);
    }

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerConfig();
        $this->registerRoutes();
        $this->registerTranslations();
        $this->registerViews();
        $this->registerMigration();
        $this->registerCommand();
        $this->publishAssets();
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__ . '/../config/module.php' => config_path('module.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__ . '/../config/module.php', self::IDENTIFY
        );
    }

    /**
     * Register routes.
     *
     * @return void
     */
    protected function registerRoutes()
    {
        $sourcePath = __DIR__ . '/../routes/web.php';
        $this->loadRoutesFrom($sourcePath);
    }

    /**
     * Register views.
     *
     * @return void
     */
    protected function registerViews()
    {
        $viewPath = resource_path('views/vendor/module');

        $sourcePath = __DIR__ . '/../resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom($sourcePath, self::IDENTIFY);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    protected function registerTranslations()
    {
        $langPath = resource_path('lang/module');
        $sourcePath = __DIR__ . '/../resources/lang';

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, self::IDENTIFY);
        } else {
            $this->loadTranslationsFrom($sourcePath, self::IDENTIFY);
        }

        $this->publishes([
            $sourcePath => resource_path('lang'),
        ]);
    }

    /**
     * Register migration.
     *
     * @return void
     */
    protected function registerMigration()
    {
        $sourcePath = __DIR__ . '/../database/migrations';
        $this->loadMigrationsFrom($sourcePath);
    }

    /**
     * Register command
     *
     * @return void
     */
    protected function registerCommand()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Unet\Module\Console\Commands\CreateModule::class
            ]);
        }
    }

    /**
     * Publish assets.
     *
     * @return void
     */
    protected function publishAssets()
    {
        $sourcePath = __DIR__ . '/../public';
        $this->publishes([
            $sourcePath => public_path('vendor/module'),
        ], 'public');
    }

    /**
     * register
     */
    public function register()
    {
    }
}
