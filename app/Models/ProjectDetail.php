<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id', 'room', 'width', 'length', 'area', 'perimeter'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
