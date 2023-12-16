<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    use HasFactory;
    protected $tables = "documents";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
