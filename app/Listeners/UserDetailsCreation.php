<?php

namespace App\Listeners;

use App\EmployerDetails;
use App\Notifications\AccountCreated;
use App\UserDetails;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
class UserDetailsCreation
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {

        if($event->user->account_type == 'candidate'){
            $user_details = new UserDetails();
            $user_details->user_id = $event->user->id;
            $user_details->save();
        } else{
            $user_details = new EmployerDetails();
            $user_details->user_id = $event->user->id;
            $user_details->save();
        }
        $event->user->notify(new AccountCreated($event->user));

    }
}
