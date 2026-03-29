<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //
    //Cette phrase vas me permettre de modifier les information de ma base de donnée
    protected $fillable=['title','description','completed','del'];
}
