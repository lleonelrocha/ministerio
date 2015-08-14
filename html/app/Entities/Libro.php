<?php
namespace App\Entities;

class Libro extends entity{

    protected $table = 'libros';

    protected $fillable = ['id', 'nombre', 'editorial', 'autor', 'fecha_edicion' ];

    //relaciones

    // un libro puede ser prestado a muchos usuarios
    public function user()
    {
        return $this->belongsToMany(User::getClass(), 'libros_users');
    }

    //Un libro le perteneces solo a un autor
    public function autor()
    {
        return $this->belongsTo(Autor::getClass());
    }

    //Un libro pertenece a una sola editorial
    public function editorial()
    {
        return $this->belongsTo(Editorial::getClass());
    }

    // Accessors
    public function getFullnameAttribute()
    {
        $suma  = ($this->id + 4);
        $fecha = snake_case($this->nombre);
        return $suma ;
    }

    public function getFullidAttribute()
    {
        return $this->id;
    }

    public function getPersonListAttribute()
    {
        return $this->user()->lists('id');
    }

    //Muttators

    /*
       public function setImageurlAttribute($value)
    {
        if (is_null($value))
            $this->attributes['image_url'] = 'nopic.jpg';
    }

    public function setPasswordAttribute($value)
    {
        $this->attribute['password'] = bcrypt($value);
    }

    // Scopes
    public function scopeFirst_name($query, $search)
    {
        if (trim($search) != '')
            $query->orWhere('first_name', 'like', "%$search%");
    }


     */
    //Scoops

    public function scopeDescripcion($query, $search)
    {
        if(trim($search) != '')
            $query->orWhere('descripcion', 'like', '%$search%');
    }

}