<?php

namespace App\Listeners;

use App\Events\UserEventListener;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;

class Listeners
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Handle the event.
     *
     * @param  UserEventListener  $event
     * @return void
     */
    // public function handle(UserEventListener $event)
    // {
    //     //
    // }
    public function onUserLogin(User $user, $remember)
    {
        $user->loginCount++;
        $user->save();
    }

}
