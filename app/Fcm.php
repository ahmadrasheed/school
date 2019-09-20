<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fcm extends Model
{
    protected $guarded = [];


    static public function send_notification ($post)
	{   

        $data=Fcm::all('token');
        //dd($tokens5);
        $tokens=[];
        // $tokens[]="ahmad";
        // $tokens[]="ahmad2";
        
        foreach($data as $token){
            $tokens[]=$token['token'];
        }
        // dd($tokens);
        
        $image="http://multaka.ahmadiraq.com/img/multaka-logo.png";
        $data=array(
            'title' =>$post->title,
            'body'  =>$post->short,
            'post_id'   =>$post->id,
            'image' => 'http://multaka.ahmadiraq.com/img/multaka-logo.png'
        );
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array(
			 'registration_ids' => $tokens,
			 'data' => $data
			);
		$headers = array(
			'Authorization:key = AAAAg8fuRYM:APA91bHae9WJA1u-Eid_6nwKphhUks2YADtaJ2cveAc928xK5uoWFb5P05M4iFO2JrmBcNCrjDr8jiJqbqsMfBpFiJf80sqPwKVK5ZBNM1mcugtqmFnMKZV0WV-ENdJjUVczm1_tGloR',
			'Content-Type: application/json'
			);
	   $ch = curl_init();
       curl_setopt($ch, CURLOPT_URL, $url);
       curl_setopt($ch, CURLOPT_POST, true);
       curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
       curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
       curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
       curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
       $result = curl_exec($ch);           
       if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
           dd("something error from FCM class");
       }
       curl_close($ch);

       //dd("notification done from fcm class");
       return $result;

	}




}
