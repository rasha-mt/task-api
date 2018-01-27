<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskUser extends Model
{
    ////
    protected $fillable=[
  'id',
  'user_id',
  'pkey',  ////pkey is the name of id Task
];

public function User(){
   $this->belongTo('app\User');

}

public function Task(){
$this->belongTo('app\Task');

}
}
