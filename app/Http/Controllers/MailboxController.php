<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailboxController extends Controller
{
    public function mailbox(){
        return view('mailbox');
    }
}
