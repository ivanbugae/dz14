<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }

    public function taskHistory()
    {
        return $this->hasMany(TaskHistory::class, 'task_id', 'id');
    }





    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }
}
