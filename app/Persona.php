<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
	protected $appends = ['full_name','url_image'];

    protected $guarded = ['id'];

	public function getUrlImageAttribute()
    {
        return \Storage::url($this->file);
    }
    

    public function getFullNameAttribute()
    {
        return "{$this->apellidoPaterno} {$this->apellidoMaterno} {$this->nombres}";
    }
}
