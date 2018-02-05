<?php

namespace LaravelTools\Ck;

use Illuminate\Support\ServiceProvider;

class CkServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    // use ServiceProviderTraits;

    public function boot(Router $router)
    {
        // dd('Caught');
        // $this->bladeDirective('ckeditor', CkEditor::class, 'editor');
        // $this->loadViews();
        // $this->publishAssets();
        // $this->registerRoutes($router);
        // $this->publishConfig();
    }

    public function register()
    {
        // $this->app->singleton(CkEditor::class);

        // $this->app->singleton(ImageUploader::class, function (Container $app) {
        //     $storage = $app->make(Factory::class);
        //     $url = $app->make(UrlGenerator::class);
        //     $config = $this->getConfig();
        //     $disk = $storage->disk($config['disk']);
        //     return new ImageUploader($disk, $url, new ImageManager(['drive' => 'imagick']));
        // });
    }

    // protected function path()
    // {
        // return __DIR__ . '/..';
    // }

    // protected function name()
    // {
        // return 'ckeditor';
    // }

    // private function registerRoutes(Router $router)
    // {
        // $router->group([
        //     'prefix' => 'ckeditor',
        //     'as' => 'ckeditor.',
        //     'middleware' => ['web', 'auth'],
        //     'namespace' => __NAMESPACE__ . '\\Http\\Controllers'
        // ], function (Router $router) {

        //     $router->post('images', 'Images@store')->name('images.store');

        // });
    // }

    // private function getConfig()
    // {
    //     $config = $this->app->make(Repository::class);
    //     return $config['ckeditor'];
    // }

    // protected function getContainer()
    // {
    //     return $this->app;
    // }
}