<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function complete($completed = true)
    {
        $this->update(compact('completed'));
    }


    public function incomplete()
    {
        $this->complete(false);
    }


    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id', 'id');
    }
}
