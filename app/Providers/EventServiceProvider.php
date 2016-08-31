<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
        'App\Events\CommentOnArticleEvent'=>['App\Listeners\CommentOnArticleListner'],

           'App\Events\LikeOnArticleEvent'=>
           ['App\Listeners\LikeOnArticleListener'],

           'App\Events\LoginEvent'=>
           ['App\Listeners\LoginListener'],

           'App\Events\RefreshPageEvent'=>
           ['App\Listeners\LoginListener'],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
