<?php 

namespace App\Models;

use CodeIgniter\Model;

class GenerosMusicaisModel extends Model{
    protected $table = 'generos_musicais';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome'];
    
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function getGenerosMusicais($id = false){
        if(!$id){
            return $this->orderBy('id','asc')
                ->findAll();
                
        } else {
            return $this->asArray()
                ->where(['id' => $id])
                ->first();
        }
    }
}