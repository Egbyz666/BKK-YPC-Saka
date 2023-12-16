<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarLoker extends Model
{
    use HasFactory;
    protected $tables = "daftar_lokers";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
