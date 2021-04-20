<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Students;
class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'usr_id';
    const CREATED_AT = 'usr_created_at';
    const UPDATED_AT = 'usr_updated_at';
    protected $guarded = [];

    public function getAuthPassword()
    {
        return $this->usr_password;
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'usr_password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'usr_email_verified_at' => 'datetime',
    ];

    public function getRememberToken()
    {
        return $this->usr_remember_token;
    }

    public function setRememberToken($value)
    {
        $this->usr_remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'usr_remember_token';
    }
}
