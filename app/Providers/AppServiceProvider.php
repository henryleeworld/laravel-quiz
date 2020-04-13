<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Question;
use App\QuestionsOption;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Question::deleting(function ($question) {
            $question->options()->delete();
        });
    }
}
