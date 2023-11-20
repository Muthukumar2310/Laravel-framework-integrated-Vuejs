<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database\Reference;

class ChatController extends Controller
{
    protected $firebase;
    protected $database;
    protected $chatRef;

    public function __construct()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/laravel-6c7bd-firebase-adminsdk-snzlh-ce2506e488.json');

        $this->firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();

        $this->database = $this->firebase->getDatabase();
        $this->chatRef = $this->database->getReference('chat/messages');
    }
}
