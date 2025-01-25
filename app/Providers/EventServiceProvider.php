<?php

namespace App\Providers;

use App\Events\OpenAddReminderEvent;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Native\Laravel\Facades\Window as FacadesWindow;
use Native\Laravel\Windows\Window;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
       Event::listen(OpenAddReminderEvent::class, function() {
        FacadesWindow::open('add-reminder')
        ->title('Add Reminder')
        ->rememberState()
        ->route('add-reminder')
        ->showDevTools(false);

       });
           
        }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
