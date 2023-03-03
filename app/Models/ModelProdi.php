<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProdi extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_prodi')
            ->orderBy('tbl_prodi.id_prodi', 'ASC')
            ->get()->getResultArray();
    }

    public function detail_Data($id_prodi)
    {
        return $this->db->table('tbl_prodi')
            ->where('id_prodi', $id_prodi)
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_prodi')
            ->insert($data);
    }
    public function edit($data)
    {
        $this->db->table('tbl_prodi')->where('id_prodi', $data['id_prodi'])->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_prodi')->where('id_prodi', $data['id_prodi'])->delete($data);
    }
}
