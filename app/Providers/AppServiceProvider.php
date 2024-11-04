<?php

namespace App\Providers;

use App\Models\Universitet;
use App\Models\Facultet;
use App\Models\Leaning;
use App\Models\Group;
use App\Models\Course;
use App\Models\Student;

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
        view()->share('univerCount', Universitet::count());
        view()->share('facultCount', Facultet::count());
        view()->share('leanCount', Leaning::count());
        view()->share('groupCount', Group::count());
        view()->share('courseCount', Course::count());
        view()->share('studentCount', Student::count());
    }
}
