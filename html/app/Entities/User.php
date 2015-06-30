<?php namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Entity implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['firstName', 'lastName', 'email', 'password', 'phoneNumber', 'country', 'state', 'imageUrl', 'id_profile'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    protected $name;

	protected $hidden = ['password', 'remember_token'];

    // Relaciones
    public function profile()
    {
        return $this->belongsTo(Profile::getClass());
    }

    // Scopes
    public function scopeFirstname($query, $search)
    {
        if (trim($search) != '')
            $query->orWhere('firstName', 'like', "%$search%");
    }

    // Mutators
    public function setImageurlAttribute($value)
    {
        if (is_null($value))
            $this->attributes['imageUrl'] = 'nopic.jpg';
    }

    public function setPasswordAttribute($value)
    {
        $this->attribute['password'] = bcrypt($value);
    }

    // Accessors
    public function getFullnameAttribute()
    {
        return $this->lastName . ', ' . $this->firstName;
    }





}
