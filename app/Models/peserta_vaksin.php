<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class peserta_vaksin extends Model
{
    protected $table = 'daftar_vaksin';
    public $timestamps = true;
    use SoftDeletes;
}
