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
        'dni' => 'required|min_length[7]|max_length[8]',
        'telefono' => 'required',
        'direccion' => 'required',
        'mail' => 'required|valid_email|is_unique[socios.mail]',
        'id_categoria' => 'required'
    ]; //['email' => 'required|valid_email|is_unique[usuarios.email]'];
    protected $validationMessages = [
        'nombre_apellido' => ['required' => "El campo nombre es requerido"],
        'dni' => ['required' => "El campo documento es requerido", 'min_length' => "Longitud de documento invalido", 'max_length' => "Longitud de documento invalido"],
        'telefono' => ['required' => "El campo telefono es requerido"],
        'direccion' => ['required' => "El campo direccion es requerido"],
        'mail' => ['required' => "El campo mail es requerido", 'valid_email' => "Formato de mail invalido", 'is_unique' => "El mail ya existe para un usuario"],
        'id_categoria' => ['required' => "El campo categoria es requerido"]
    ];
    protected $skipValidation = false;  // es para indicar que use la validación
}
