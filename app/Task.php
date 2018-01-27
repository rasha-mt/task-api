<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
      'name', 'due', 'list',
      'inquiry','user_id','notes',
      'status'
  ];

  public function User(){
       return $this->belongsToMany('app\User');
     }
// //////////////////////
     public  function List(){
    return $this->belongsTo('App\List');
        }
/////////////////////
// //////////////////////
     public  function Inquiry(){
    return $this->belongsTo('App\Inquiry');
        }
/////////////////////

}
