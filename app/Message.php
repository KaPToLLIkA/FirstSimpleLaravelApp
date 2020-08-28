<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    protected $attributes = [
      'sender' => 'NO_SENDER',
      'message' => 'NO_MESSAGE'
    ];

    protected $table = 'message';

    protected $connection = 'mysql';

    public $timestamps = false;
}
