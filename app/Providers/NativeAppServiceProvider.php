<?php

namespace App\Providers;

use App\Events\OpenAddReminderEvent;
use Native\Laravel\Facades\Window;
use Native\Laravel\Contracts\ProvidesPhpIni;
use Native\Laravel\Menu\Menu;

class NativeAppServiceProvider 
{
    /**
     * Executed once the native application has been booted.
     * Use this method to open windows, register global shortcuts, etc.
     */
    public function boot(): void
    {
    
       
       
        Window::open()
        ->title('Reminder App')
        ->showDevTools(false)
        ->route('reminders');

        
        Menu::new()
        
        ->appMenu()
        ->submenu('My Menu', Menu::new()
        ->event(OpenAddReminderEvent::class,'Add Remidnder','CmdOrCtrl+R')
        ->checkbox('My Checkbox')
        ->link('https://google.com','Google',"cmd+g")
        ->separator()
        ->quit())
        ->register();



        
    }

   
}
