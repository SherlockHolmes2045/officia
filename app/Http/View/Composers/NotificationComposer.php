<?php


namespace App\Http\View\Composers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NotificationComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        /*if(Auth::check()){
            $view->with('notifications', auth()->user()->notifications);
        }else{*/
            $view->with('notifications',[]);
       // }
    }
}
