<?php namespace App\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Entity implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;


	protected $table = 'users';

	protected $fillable = ['id','first_name', 'last_name', 'email', 'phone_number', 'profile_id', 'estado', 'sexo_id'];

    protected $name;

	protected $hidden = ['password', 'remember_token'];

    // Relaciones
    // Un usuario tiene solo un perfil
    public function profile()
    {
        return $this->belongsTo(Profile::getClass());
    }

    // Un usuario tiene muchos post
    public function post()
    {
        return $this->hasMany(Post::getClass());
    }

    // Un usuario puede pedir muchos libros
    public function libro()
    {
        return $this->belongsToMany(Libro::getClass(), 'libros_users');
    }

    //Un usuario tiene un solo sexo
    public function sexo()
    {
        return $this->belongsTo(Sexo::getClass());
    }

    // Scopes
    public function scopeFirst_name($query, $search)
    {
        if (trim($search) != '')
            $query->orWhere('first_name', 'like', "%$search%");



    }
    public function scopeEmail($query, $search)
    {
        if(trim($search) != '')
            $query->orWhere('email', 'like', "%$search%");


    }

    public function scopeLast_name($query, $search)
    {
        if(trim($search) != '')
            $query->orWhere('last_name', 'like', "%$search%");

    }

    public function scopeSexo($query, $search)
    {
        if(trim($search) != '')
            $query->orWhere('sexo', 'like', "%$search%");

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

    public function getDateAttribute()
    {
       return $this->created_at->format('d-m-Y');
    }


    /*$ticket = Ticket::findOrFail(1);
    $date = new \Carbon\Carbon($ticket->created_at);
    echo $date->format('d-m-Y');
    cho $ticket->created_at->format('d-m-Y');
    */
}
