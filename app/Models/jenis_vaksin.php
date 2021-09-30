<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class jenis_vaksin extends Model
{
    protected $table = 'jenis_vaksin';
    public $timestamps = true;
    use SoftDeletes;
}
