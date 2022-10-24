<?php

namespace App\Models;

use CodeIgniter\Model;

class socioModel extends Model
{
    protected $table            = 'socios';
    protected $primaryKey       = 'id_socio';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;    //con esto no se borra el registro de la base de datos en realidad al hacer un delete
    protected $allowedFields    = [
        'nombre_apellido',
        'dni',
        'telefono',
        'direccion',
        'mail',
        'id_categoria',
    ]; //Nos permite cambiar los campos que tengan estos nombre. Si no están acá no se podrán manipular
    protected $useTimestamps    = false;
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';
    protected $validationRules  = [
        'nombre_apellido' => 'required',
<<<<<<< HEAD
        'dni' => 'required|min_length[7]|max_length[8]',
=======
        'dni' => 'required',
>>>>>>> f704c75af0f73809a1c24067988cd41f052f43dc
        'telefono' => 'required',
        'direccion' => 'required',
        'mail' => 'required|valid_email|is_unique[socios.mail]',
        'id_categoria' => 'required'
    ]; //['email' => 'required|valid_email|is_unique[usuarios.email]'];
    protected $validationMessages = [
        'nombre_apellido' => ['required' => "El campo nombre es requerido"],
<<<<<<< HEAD
        'dni' => ['required' => "El campo documento es requerido"],
        'telefono' => ['required' => "El campo telefono es requerido"],
        'direccion' => ['required' => "El campo direccion es requerido"],
        'mail' => ['required' => "El campo mail es requerido"],
        'id_categoria' => ['required' => "El campo categoria es requerido"]
    ];
=======
        'dni' => ['required' => "El campo nombre es requerido"],
        'telefono' => ['required' => "El campo nombre es requerido"],
        'direccion' => ['required' => "El campo nombre es requerido"],
        'mail' => ['required' => "El campo nombre es requerido"],
        'id_categoria' => ['required' => "El campo nombre es requerido"]
    ]; /*[
        'email' => ['is_unique' => 'Este e-mail ya pertenece a otro usuario']
    ];*/
>>>>>>> f704c75af0f73809a1c24067988cd41f052f43dc
    protected $skipValidation = false;  // es para indicar que use la validación
}
