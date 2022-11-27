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
        'id_socio',
        'nombre_apellido',
        'dni',
        'edad',
        'telefono',
        'direccion',
        'mail',
        'id_categoria',
    ]; //Nos permite cambiar los campos que tengan estos nombre. Si no están acá no se podrán manipular
    protected $useTimestamps    = false;
    protected $updatedField     = 'updated_at';
    protected $deletedField     = 'deleted_at';
    protected $validationRules  = [
        'nombre_apellido' => 'required|alpha_space',
        'dni' => 'required|min_length[7]|max_length[8]|is_unique[socios.dni]',
        'edad' => 'required|max_length[2]|numeric',
        'telefono' => 'required|min_length[10]|max_length[10]',
        'direccion' => 'required|alpha_numeric_space',
        'mail' => 'required|valid_email|is_unique[socios.mail]',
        'id_categoria' => 'required',
    ]; //['email' => 'required|valid_email|is_unique[usuarios.email]'];
    protected $validationMessages = [
        'nombre_apellido' => ['required' => "El campo nombre es requerido", 'alpha_space' => "Solo se permiten letras"],
        'dni' => ['required' => "El campo documento es requerido", 'min_length' => "Longitud de documento no válida", 'max_length' => "Longitud de documento no válida", 'is_unique' => "El documento ingresado ya se encuentra registrado"],
        'edad' => ['required' => "El campo edad es requerido", 'max_length' => "Ingrese un valor menor a 100", 'numeric' => "Solo se permiten numeros"],
        'telefono' => ['required' => "El campo teléfono es requerido", 'min_length' => "Longitud de telefono no válida", 'max_length' => "Longitud de telefono no válida"],
        'direccion' => ['required' => "El campo dirección es requerido", 'alpha_numeric_space' => "Solo se permiten letras o numeros"],
        'mail' => ['required' => "El campo Email es requerido", 'valid_email' => "Formato de Email no válido", 'is_unique' => "El Email ingresado ya se encuentra registrado"],
        'id_categoria' => ['required' => "El campo categoría es requerido"]
    ];
    protected $skipValidation = false;  // es para indicar que use la validación
}
