<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'author_id'];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function values()
    {
        return $this->hasMany(AttributeValue::class);
    }

}
