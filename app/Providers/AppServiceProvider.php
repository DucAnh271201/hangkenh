<?php

namespace App\Providers;

use App\Helpers\WMenu;
use App\Repositories\Attribute\AttributeRepository;
use App\Repositories\Attribute\AttributeRepositoryInterface;
use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Repositories\File\FileRepository;
use App\Repositories\File\FileRepositoryInterface;
use App\Repositories\Option\OptionRepository;
use App\Repositories\Option\OptionRepositoryInterface;
use App\Repositories\Post\PostRepository;
use App\Repositories\Post\PostRepositoryInterface;
use App\Repositories\Tag\TagRepository;
use App\Repositories\Tag\TagRepositoryInterface;
use App\Repositories\UserAdmin\UserAdminRepositoryInterface;
use App\Repositories\PostCategory\PostCategoryRepository;
use App\Repositories\PostCategory\PostCategoryRepositoryInterface;
use App\Repositories\PostTag\PostTagRepository;
use App\Repositories\PostTag\PostTagRepositoryInterface;
use App\Repositories\UserAdmin\UserAdminRepository;
use Carbon\Carbon;
use DateTime;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Events\TransactionBeginning;
use Illuminate\Database\Events\TransactionCommitted;
use Illuminate\Database\Events\TransactionRolledBack;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerHelpers();

        $this->app->singleton('w-menu', function () {
            return new WMenu();
        });
        $this->app->bind(
            FileRepositoryInterface::class,
            FileRepository::class
        );
        $this->app->bind(
            UserAdminRepositoryInterface::class,
            UserAdminRepository::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
        $this->app->bind(
            AttributeRepositoryInterface::class,
            AttributeRepository::class
        );
        $this->app->bind(
            PostCategoryRepositoryInterface::class,
            PostCategoryRepository::class
        );
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
        );

        $this->app->bind(
            TagRepositoryInterface::class,
            TagRepository::class
        );
        $this->app->bind(
            PostTagRepositoryInterface::class,
            PostTagRepository::class
        );
        $this->app->bind(
            OptionRepositoryInterface::class,
            OptionRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
        $this->bootDBLogger();

        Collection::macro('findByMetaKey', function ($metaKey) {
            $find = $this->where('meta_key', $metaKey)->first();
            if ($find){
                return $find->meta_value;
            }

            return '';
        });
    }


    protected function bootDBLogger()
    {
        if (app()->environment('local')) {
            Log::channel('queries')->debug('-------------' . request()->fullUrl() . '----------------');
            Log::channel('queries')->debug('-' . json_encode(request()->all()) . '-');
            DB::listen(function ($query) {
                $sql = $query->sql;
                foreach ($query->bindings as $binding) {
                    if (is_string($binding)) {
                        $binding = "'{$binding}'";
                    } elseif ($binding === null) {
                        $binding = 'NULL';
                    } elseif ($binding instanceof Carbon) {
                        $binding = "'{$binding->toDateTimeString()}'";
                    } elseif ($binding instanceof DateTime) {
                        $binding = "'{$binding->format('Y-m-d H:i:s')}'";
                    }

                    $sql = preg_replace("/\?/", $binding, $sql, 1);
                }

                Log::channel('queries')->debug('SQL', ['sql' => $sql, 'time' => "$query->time ms"]);
            });

            Event::listen(TransactionBeginning::class, function (TransactionBeginning $event) {
                Log::channel('queries')->debug('START TRANSACTION');
            });

            Event::listen(TransactionCommitted::class, function (TransactionCommitted $event) {
                Log::channel('queries')->debug('COMMIT');
            });

            Event::listen(TransactionRolledBack::class, function (TransactionRolledBack $event) {
                Log::channel('queries')->debug('ROLLBACK');
            });
        }
    }


    private function registerHelpers()
    {
        $helpers = app_path('helpers.php');

        if (file_exists($helpers)) {
            require $helpers;
        }
    }
}
