<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactModel extends Model
{
    use HasFactory;
    protected $table = "_contact";
    protected $primary_key = "id";
}
