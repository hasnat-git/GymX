<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendBlog extends Model
{
    use HasFactory;
    protected $table = "blogs";
    protected $primary_key = "id";

}
