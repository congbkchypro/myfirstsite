<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $table = 'projects';
    protected $fillable = ['title', 'description'];

    public function tasks() {
    	return $this->hasMany(Task::class);
    }

    public function addTask ($description) {       	
    	// dd($task);
  //   	return Task::create([
		// 	'project_id' => $this->id,
		// 	'description' => $description
		// ]);
		 
		$this->tasks()->create($description);
    }
}
