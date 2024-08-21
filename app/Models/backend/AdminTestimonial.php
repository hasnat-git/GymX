<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTestimonial extends Model
{
    use HasFactory;
    protected $table = "testimonial";
    protected $primary_key = "id";
}
