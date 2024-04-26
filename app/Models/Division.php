<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use SoftDeletes;
    protected $table = "divisions";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'status'
    ];
     public function user(){
        return $this->hasMany(User::class, 'position_id', 'id');
    }
}
