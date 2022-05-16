<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function projects()
    {
        return $this->belongsToMany(Project::class,'taskables')->withPivot('project_id');
    }
    public function clients()
    {
        return $this->hasOne(Client::class);
    }
    public function users()
    {
        return $this->hasOne(User::class);
    }
}
