<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['users_id', 'category_id', 'title', 'brief_explanation', 'photo', 'donation_target', 'time_is_up', 'shelter_account_number', 'description', 'isPublished', 'isSelected'];

    public function getFoto(){
        return asset('images/program-images/' . $this->photo);
    }

    public function donatur()
    {
        return $this->hasMany('App\DonationConfirmation')->orderBy('isVerified');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function donation_collected(){
        $collected = $this->hasMany('App\DonationConfirmation')->where('isVerified', 1)->sum('nominal_donasi');
        return $collected;
    }
}
