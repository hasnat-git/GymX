<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = "testimonial";
    protected $primary_key = "id";
}
