<?php
namespace p3k;

use Illuminate\Support\ServiceProvider;
use Blade;

class MarkdownServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('markdown', function($expression) {
            return '<?php echo \p3k\MarkdownServiceProvider::md()->parse('.$expression.'); ?>';
        });
    }

    public static function md() {
        static $md;
        if(!isset($md)) {
            $md = new \cebe\markdown\GithubMarkdown();
        }
        return $md;
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
