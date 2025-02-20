<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;


class Contacto extends Model{
    
    protected $table="contactos";
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'telefono', 'email', 'direccion'];

    public $timestamps = false; // Si la tabla no tiene created_at y updated_at

}

?>