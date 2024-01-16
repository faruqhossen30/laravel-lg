<?php

namespace App\Models\Admin\Attribute;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable =['name','code', 'description', 'author_id'];
}
