<?php namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Entity implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;


	protected $table = 'users';

	protected $fillable = ['id','first_name', 'last_name', 'email', 'phone_number', 'profile_id'];

    protected $name;

	protected $hidden = ['password', 'remember_token'];

    // Relaciones
    public function profile()
    {
        return $this->belongsTo(Profile::getClass());
    }

    public function post()
    {
        return $this->hasMany(Post::getClass());
    }


    // Scopes
    public function scopeFirst_name($query, $search)
    {
        if (trim($search) != '')
            $query->orWhere('first_name', 'like', "%$search%");
    }

    // Mutators
    public function setImageurlAttribute($value)
    {
        if (is_null($value))
            $this->attributes['image_url'] = 'nopic.jpg';
    }

    public function setPasswordAttribute($value)
    {
        $this->attribute['password'] = bcrypt($value);
    }

    // Accessors
    public function getFullnameAttribute()
    {
        return $this->last_name . ', ' . $this->first_name;
    }

    public function getIduserAttribute()
    {
        return $this->id;
    }

}
