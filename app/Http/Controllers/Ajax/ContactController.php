<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
     public function send()
    {
		//echo "Yes";
        echo $_POST['text'];
    }
}
