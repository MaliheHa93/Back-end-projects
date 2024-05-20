<?php

namespace App\Http\Controllers;

use App\Models\VoteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class firstviewController extends Controller
{
    public function index()
    {
        return view('toosTechDir.Home');
    }
//    public  function store(Request $request){
//        $vote= new VoteModel();
//        $vote->name = $request->input('name');
//        $vote->emailaddress =$request->input('email');
//        $vote->companyName= $request->input('CompanyName');
//        $vote->explain=$request->input('message');
//        $vote->save();
////        dd("malijshdahsdjhasdjasdjhsd");
//        return view('toosTechDir.home');
//    }
}
