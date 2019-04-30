<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['program_id', 'report'];

    public function program()
    {
        return $this->belongsTo('App\Program');
    }
}
