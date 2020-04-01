<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporting extends Model
{
    protected $table="reports";
    protected $fillable=['longitude','latitude','type','urlToImage','time','description','gouvernorat','delegation'];
}
