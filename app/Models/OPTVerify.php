<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OPTVerify extends Model
{
    use HasFactory;
    protected $table = 'opt_verifies';
    protected $primaryKey = 'id';
}
