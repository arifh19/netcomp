<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['nama_tim', 'kategori_id','ketua','nim','anggota1','nim1','anggota2','nim2','wa','line'];
    public function kategori()
    {
        return $this->belongsTo('App\Kategori');
    }
    public function verify()
    {
        return $this->belongsTo('App\Verify');
    }
}
