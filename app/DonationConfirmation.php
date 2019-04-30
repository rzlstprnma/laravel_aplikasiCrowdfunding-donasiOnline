<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationConfirmation extends Model
{
    protected $fillable = ['users_id' ,'program_id', 'id_transaksi', 'nama_donatur', 'nominal_donasi', 'email', 'dukungan', 'bukti_pembayaran', 'isVerified'];


    public function getFoto(){
        return asset('images/bukti_pembayaran/' . $this->bukti_pembayaran);
    }
   
    public function program()
    {
        return $this->belongsTo('App\Program');
    }

}
