<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
     public function send()
    {
		//echo "Yes";
		//echo Auth::user()->name;
		 $user = Auth::user()->name;
       echo $user, " " ,$_POST['text'];
    }
}
