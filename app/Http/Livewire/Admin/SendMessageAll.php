<?php

namespace App\Http\Livewire\Admin;

use App\Mail\NewNotification;
use App\Models\Settings;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class SendMessageAll extends Component
{
    public $message;
    public $subject;

    public function render()
    {
        return view('livewire.admin.send-message-all');
    }

    // Send Mail to all users
    public function sendMailToall(){
        $settings = Settings::find(1);

        Mail::to(User::all())->send(new NewNotification($this->message, $this->subject, "$settings->site_name customer"));
        session()->flash('success', 'Your message was sent successfully!');
        return redirect()->route('userlist');
    }
}
