<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notification.create');
    }

    public function sendToSchool(Request $request){
          $data = $request->validate([
            //'title' => 'required',
           // 'amount' => 'required|numeric',
           //'image' => 'required',
            'body' => 'required',
            ]); 

            FCM::sendToSchool($data);
            echo "done";
        

    }
}
