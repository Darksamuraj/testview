<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
     public function send()
    {
		//echo "Yes";
		//echo Auth::user()->name;
		 $user = Auth::user()->id;
		 $usery = Auth::user();
		 //$user->update(['user_id'=>2]);
		 DB::table('users')
		 				->where('id',$user)
		 				->update(['user_id'=>$_POST['text']]);
       echo $usery->name, " " ,$_POST['text'];
    }
}
