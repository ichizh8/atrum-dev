<?php

namespace App\Models\Grapes\Pages;

use Illuminate\Database\Eloquent\Model;

class GrapesPage extends Model
{
    protected $fillable = [
        'page_id',
        'project',
        'html'
    ];

    protected function casts(): array
{
    return [
        'project' => 'json',
    ];
}
}