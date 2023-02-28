<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CodeBarre extends Model
{
    use HasFactory;
    protected $table = 'codebarre';

    protected $fillable = [
        'imagecodebarre'
    ];
}
