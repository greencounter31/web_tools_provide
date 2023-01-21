<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shells extends Model
{
    use HasFactory;
    protected $table = 'shells';

    protected $fillable = ['name', 'source', 'country', 'hosting', 'seo_rank', 'hosting_info', 'price', 'status'];

}
