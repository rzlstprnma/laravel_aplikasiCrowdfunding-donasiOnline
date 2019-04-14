<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationConfirmation extends Model
{
    protected $fillable = ['program_id', 'nominal_donasi', 'bukti_pembayaran', 'isVerified'];
}
