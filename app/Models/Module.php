<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'icon',
        'link',
        'function',
        'type_handler',
        'controller_name',
        'sort_field',
        'organization_id'
    ];
}
