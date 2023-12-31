<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime', ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    #Comprueba si el modelo actual de usuario tiene un rol determinado
    public function hasRole($role) {

        if ($this->roles()->where('name', $role)->first()) {

            return true;
        } 

        return false;
    }

    # Comprueba si un usuario tiene alguno de los roles recibidos en un # array
    public function hasAnyRole($roles) {

        if (is_array($roles)) {
            foreach ($roles as $role) {

                if ($this->hasRole($role)) {

                    return true;
                }
            }
        } else {

            if ($this->hasRole($roles)) {

                    return true;
                }
            }
        return false;
    }

    public function autorizeRoles($roles) {

        if ($this->hasAnyRole($roles)) {
            return true;
        }

        abort(403, 'Acción No Autorizada');
    }
}
