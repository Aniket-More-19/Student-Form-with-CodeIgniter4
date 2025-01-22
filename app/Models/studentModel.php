<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $DBGroup = 'default';

    protected $table = "student_info";
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['name', 'phoneNumber', 'email', 'education'];

    // protected $useTimeStamps = false;
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';
    // protected $deletedField = 'deleted_at';

    // protected $validationRules = [];
    // protected $validationMessages = [];
    // protected $skipValidation = false;
}
