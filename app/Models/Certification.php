<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CertificationType;

class Certification extends Model
{
    use SoftDeletes;
    protected $table = "certifications";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'certification_type_id',  'name'
    ];
    
    public function certificationType()
    {
        return $this->belongsTo(CertificationType::class);
    }

}
