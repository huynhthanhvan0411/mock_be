<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use SoftDeletes;
    protected $table = "roles";
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
        'name', 'status'
    ];
}
