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
        
        $image="http://school.ahmadiraq.com/img/school-logo.png";
        $data=array(
            'title' =>$post->title,
            'body'  =>$post->short,
            'post_id'   =>$post->id,
            'image' => 'http://school.ahmadiraq.com/img/school-logo.png'
        );
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = array(
			 'registration_ids' => $tokens,
			 'data' => $data
			);
		$headers = array(
			'Authorization:key = AAAAUv6CzGw:APA91bES0GqPSl8vuQU_K7sFlEiyneIhhj74IeMflyUP2wzrpMKHnqNYNsLDKNqRDVx35rUSwL8ZLe5F4s3LG6B0-nx4STQrUOqO3jBiTpq6eOCIGkD2WPsfQF2BBEbqtgCfh1ioc9qs',
                                        
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
