<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SendController extends Controller
{


    public function send(Request $request)
    {
    //    Twillo SMS Api integration

      try {
          $account_sid = env('TWILIO_SID');
          $account_token = env('TWILIO_TOKEN');
          $number = env('TWILIO_FROM');

          $client = new Client($account_sid,$account_token);
          $client->messages->create('+91' . $request->phone,[
              "from"=>$number,
              "body"=>$request->message
          ]);
           return "Message sent......";

      } catch (\Exception $e) {
          return $e->getMessage();
      }

    }
}
