<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationConfirmation extends Model
{
    protected $fillable = ['program_id', 'nama_donatur', 'nominal_donasi', 'email', 'dukungan', 'bukti_pembayaran', 'isVerified'];

   
}
