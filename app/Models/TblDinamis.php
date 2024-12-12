<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TblDinamis extends Model
{
    use HasFactory;

    protected $table = 'tbl_dinamis';

    protected $fillable = ['konten'];

    public $timestamps = false;

}