<?php

namespace App\Models;
use CodeIgniter\Model;

class CompositoresModel extends Model{
    protected $table = 'compositores';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome','descricao', 'id_genero_musical', 'id_user_created', 'id_user_updated', 'avatar_img','background_img'];

    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    /**
     * Busca os compositores
     */
    public function getCompositores($id = false){
        if(!$id){
            return $this->select('compositores.id, compositores.nome as `compositor_nome` ,generos_musicais.nome as `genero_musical_nome`, compositores.avatar_img')
                ->join('generos_musicais','generos_musicais.id = compositores.id_genero_musical')
                ->findAll();

            // return $this->findAll();
        } else {
            return $this->asArray()
                ->where(['id' => $id])
                ->first();
        }
    }

}