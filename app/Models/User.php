<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        // 'name',
        // 'email',
        // 'password',
        'username',
        'email',
        'birthday',
        'gender',
        'phone',
        'avatar',
        'salary',
        'contract_start_date',
        'contract_end_date',
        'division_id',
        'employment_type',
        'address',
        'identification',
        'phone_family',
        'status',
        'email_verified_at',
        'password',
        'remember_token',
     
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'birthday' => 'date',
            'contract_start_date' => 'date',
            'contract_end_date' => 'date',

        ];
    }
    //
    public function getGenderAttribute($value)
    {
        return $value === 1 ? 'Male' : 'Female';
    }

    /**
     * Get the user's status.
     *
     * @param  int  $value
     * @return string
     */
    public function getStatusAttribute($value)
    {
        return $value === 1 ? 'Active' : 'Inactive';
    }

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return $this->username;
    }

    //
    public function division(){
        return $this->belongsTo(Division::class, 'division_id', 'id');
    }
}
