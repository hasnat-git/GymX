<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendShop extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $primary_key = "id";
}
