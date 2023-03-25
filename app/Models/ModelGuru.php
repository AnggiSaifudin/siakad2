<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGuru extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_guru')->orderBy('nip', 'DESC')->get()->getResultArray();
    }
    public function detailData($nip)
    {
        return $this->db->table('tbl_guru')
            ->where('nip', $nip)
            ->get()->getRowArray();
    }
    public function BioGuru()
    {
        return $this->db->table('tbl_guru')
            ->where('nip', session()
                ->get('username'))
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_guru')->insert($data);
    }
    public function edit($data)
    {
        $this->db->table('tbl_guru')
        ->where('nip', $data['nip'])
        ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_guru')->where('nip', $data['nip'])->delete($data);
    }
}
