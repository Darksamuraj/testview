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
		 $usery->dobro_id=$_POST['text'];
		 $usery->save();
		/* DB::table('users')
		 				->where('id',$user)
		 				->update(['dobro_id'=>$_POST['text']]);*/
		/* $result="";
		if($_POST['text']==2){
			$result="Добрый";
		}else{
			$result="Злой";
		}*/
		
      echo $usery->dobro->name, " ";
    }
}
