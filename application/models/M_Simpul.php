<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Simpul extends CI_Model
{

    public function datatable()
    {
        @$draw = $_POST['draw'];
        @$length = $_POST['length'];
        @$start = $_POST['start'];
        @$search = $_POST['search'];

        $output = array();
        $output['draw'] = $draw;
        $output['data'] = array();
        $sql = "SELECT * FROM tb_simpul WHERE simpulType = '-' ";
        if ($search != '') {
            $sql .= "AND (tb_simpul.simpulNama LIKE '%" . $search . "%'";
            $sql .= " OR tb_simpul.simpulAlamat LIKE '%" . $search . "%')";
        }
        $sql .= " ORDER BY tb_simpul.simpulID DESC ";
        $sql1 = $sql . "LIMIT $start,$length";
        $query1 = $this->db->query($sql1);
        $query2 = $this->db->query($sql);
        $output['recordsTotal'] = $output['recordsFiltered'] = $query2->num_rows();
        $nomor_urut = $start + 1;
        foreach ($query1->result() as $row) {

            $output['data'][] = array(
                $nomor_urut,
                $row->simpulNama,
                $row->simpulLat,
                $row->simpulLng,
                '<div class="btn-group btn-rounded" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-danger btn-del" data-id="'.$row->simpulID.'"><i class="dripicons-document-delete"></i></button>
                  <button type="button" class="btn btn-success btn-edit" data-id="'.$row->simpulID.'"><i class="dripicons-document-edit"></i></button>
                </div>'
            );
            $nomor_urut ++;
        }
        echo json_encode($output);
    }
    public function insert($simpulID,$simpulNama,$simpulType,$simpulAlamat,$simpulLat,$simpulLng){
        $sql = "
            INSERT INTO `tb_simpul`(`simpulID`, `simpulNama`, `simpulType`, `simpulAlamat`, `simpulLat`, `simpulLng`)
            VALUES ('{$simpulID}','{$simpulNama}','{$simpulType}','{$simpulAlamat}','{$simpulLat}','{$simpulLng}')
            ON DUPLICATE KEY UPDATE 
                simpulNama = VALUES(simpulNama),
                simpulType = VALUES(simpulType),
                simpulAlamat = VALUES(simpulAlamat),
                simpulLat = VALUES(simpulLat),
                simpulLng = VALUES(simpulLng)
            ";
        $this->db->query($sql);
        if($this->db->affected_rows()){
            return TRUE;
        }
        return FALSE;
        
    }
}
