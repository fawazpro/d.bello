<?php
namespace App\Models;

use CodeIgniter\Model;

class Blogs extends Model
{
    protected $table      = 'blog';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['title','img','content'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}