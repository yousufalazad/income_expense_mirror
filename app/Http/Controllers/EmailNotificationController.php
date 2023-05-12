<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\EmailNotification;
use App\Models\User;
use Notification;
// use Illuminate\Notifications\Notification;

class EmailNotificationController extends Controller
{
    public function notificationSend(){
        
        // $receiver = User::first();
        $receiver = User::find(12);
        // dd('Show email id, not data');
        $emailContent = [

            'greeting' => 'Hi '.$receiver->fname. ',',
            'body1' => 'This is body 1 text. Here we will wright introduction text or summary',
            'body2' => 'This is body part 2 space, we will write body 2 here.',
            'thanks' => 'Thanks text will set on the bottom but it will follow setup in EmailNotification.php file, that is the beauty',
            'actionText' => 'Actually button text here',
            'actionURL' => url('/'),
        ];
        dd($receiver);
        Notification::send($receiver, new EmailNotification($emailContent));
        //$receiver->notify(new EmailNotification($emailContent));
        dd($emailContent);
    }
}
