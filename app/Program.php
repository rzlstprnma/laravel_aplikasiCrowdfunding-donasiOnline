<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['users_id', 'title', 'brief_explanation', 'area_name', 'photo', 'donation_target', 'time_is_up', 'shelter_account_number', 'description', 'isPublished', 'isSelected'];

    public function getFoto(){
        return asset('images/program-images/' . $this->photo);
    }

}
