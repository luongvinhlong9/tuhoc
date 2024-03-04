<?php

namespace App\Providers;

use App\Models\Documents;
use App\Models\Subject;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $subjects = Subject::all();
        View::share('subjectsList', $subjects);
        $documents = Documents::all();
        View::share('documentsList', $documents);
    }
}
