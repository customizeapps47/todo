<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $fillable = [
        'title', 'des', 'status','important','due_date','created_at','shop_id'
    ];
    protected $hidden = [
        
    ];
}
