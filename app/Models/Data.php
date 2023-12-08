<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{

    protected $table = 'Data';
    protected $primaryKey = 'ID';
    protected $fillable =  [
        'ID', 'Nis', 'Nama','Asal_Sekolah', 'Tanggal_Lahir', 'Jenis_Kelamin', 'Alamat', 'Kota'
    ];

    public $incrementing = false;
    public $timestamp = true;

}
