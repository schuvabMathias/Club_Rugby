<?php

namespace App\Models;

use CodeIgniter\Model;

class infantilModel extends Model
{
    protected $table            = 'infantiles';
    protected $primaryKey       = 'id_infantil';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;    //con esto no se borra el registro de la base de datos en realidad al hacer un delete
    protected $allowedFields    = [
        'nombre_tutor',
        'dni_tutor',
        'id_socio',
    ]; //Nos permite cambiar los campos que tengan estos nombre. Si no están acá no se podrán manipular
    protected $useTimestamps    = false;
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';
    protected $validationRules  = [
        'nombre_tutor' => 'required',
        'dni_tutor' => 'required',
        'id_socio' => 'required',
    ]; //['email' => 'required|valid_email|is_unique[usuarios.email]'];
    protected $validationMessages = [
        'nombre_tutor' => ['required' => 'El campo nombre tutor es requerido'],
        'dni_tutor' => ['required' => 'El campo documento tutor es requerido'],
        'id_socio' => ['required' => 'El campo id_socio es requerido']
    ]; /*[
        'email' => ['is_unique' => 'Este e-mail ya pertenece a otro usuario']
    ];*/
    protected $skipValidation = false;  // es para indicar que use la validación
}
