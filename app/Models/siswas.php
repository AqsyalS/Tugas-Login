<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswas extends Model
{
   protected $table ='siswas';
   protected $primary ='id';
   protected $guarded = [
       'id'
   ];
}
