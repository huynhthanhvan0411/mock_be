<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificationType extends Model
{
    use SoftDeletes;
    protected $table = "certification_types";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'status'
    ];

    public function certification(){
        return $this->hasMany(Certification::class, 'certification_type_id', 'id');
    }
}
