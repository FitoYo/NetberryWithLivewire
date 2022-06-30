<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 'task'
    ];

    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
