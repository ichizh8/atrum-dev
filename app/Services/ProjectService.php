<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class ProjectService
{
    public static function GetProjects(): Collection
    {
        $projects = Project::select('id', 'title', 'preview', 'full_image', 'description')->get();

        return $projects;
    }
}
