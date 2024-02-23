<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeDirective extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Directive Blade pour le helper route()
        Blade::directive('route', function ($expression) {
            return "<?php echo route(" . $expression . "); ?>";
        });

        // Directive Blade pour le helper dd()
        Blade::directive('debug', function ($expression) {
            return "<?php dd($expression); ?>";
        });

        // Directive Blade pour le helper mix()
        Blade::directive('mix', function ($expression) {
            return "<?php echo e(mix($expression)); ?>";
        });
    }
}
