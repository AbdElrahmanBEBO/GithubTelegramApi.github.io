<?php

namespace App\Controllers;

use Longman\TelegramBot\Request as TelegramReq;

class Home extends BaseController
{      
    public $i = 0;
    public function index()
    {   
        return view('welcome_message');
    }

    public function set_webhook(){  
        TelegramReq::setWebhook([
            'url' => 'https://webhook.site/4d01d252-2f12-4abb-a9ea-67586c4c18da'
        ]);
        $this->i++;
    }
    public function to_telegram() {
        TelegramReq::sendMessage([
            'chat_id' => '2111027172',
            'text' => 'test'
        ]);
        $this->i++;
    }
}