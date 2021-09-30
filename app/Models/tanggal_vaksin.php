<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tanggal_vaksin extends Model
{
    protected $table = 'tgl_vaksin';
    public $timestamps = true;
    use SoftDeletes;
}
