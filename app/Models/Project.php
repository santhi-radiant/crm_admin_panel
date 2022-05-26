<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function tasks()
    {
        return $this->hasmany(Task::class,'taskables');
    }
    public function client()
    {
        return $this->hasOne(Client::class,'id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id');
    }
}
