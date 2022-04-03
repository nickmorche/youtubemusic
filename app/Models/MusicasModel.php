<?php

namespace App\Models;
use CodeIgniter\Model;

class MusicasModel extends Model{
    protected $table = 'musicas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome','descricao'];

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    /**
     * Busca as musicas
     */
    public function getMusicas($id = false){
        if(!$id){
            return $this->findAll();
        } else {
            return $this->asArray()
                ->where(['id' => $id])
                ->first();
        }
    }
}