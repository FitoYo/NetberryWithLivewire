<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'task', 'category'
    ];

    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }

}
