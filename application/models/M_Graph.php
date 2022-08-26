<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Graph extends CI_Model
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
        $sql = "SELECT
                            tb_graf.graphID,
                            SM.simpulNama as simpulAwal,
                            SM.simpulLat as simpulAwalLat,
                            SM.simpulLng as simpulAwalLng,
                            SA.simpulNama as simpulAkhir,
                            SA.simpulLat as simpulAkhirLat,
                            SA.simpulLng as simpulAkhirLng,
                            jarak
                            FROM
                            tb_graf
                            INNER JOIN tb_simpul AS SM ON tb_graf.simpulMulai = SM.simpulID
                            INNER JOIN tb_simpul AS SA ON tb_graf.simpulAkhir = SA.simpulID";
        if ($search != '') {
            $sql .= " WHERE SM.simpulNama LIKE '%" . $search . "%'";
            $sql .= " OR SA.simpulNama LIKE '%" . $search . "%'";
        }
        $sql .= " ORDER BY tb_graf.graphID DESC ";
        $sql1 = $sql . "LIMIT $start,$length";
        $query1 = $this->db->query($sql1);
        $query2 = $this->db->query($sql);
        $output['recordsTotal'] = $output['recordsFiltered'] = $query2->num_rows();
        $nomor_urut = $start + 1;
        foreach ($query1->result() as $row) {

            $output['data'][] = array(
                $nomor_urut,
                $row->simpulAwal,
                $row->simpulAkhir,
                $row->jarak." Km",
                '<div class="btn-group btn-rounded" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-danger btn-del" data-id="'.$row->graphID.'"><i class="dripicons-document-delete"></i></button>
                  <button type="button" class="btn btn-success btn-edit" data-id="'.$row->graphID.'"><i class="dripicons-document-edit"></i></button>
                </div>'
            );
            $nomor_urut ++;
        }
        echo json_encode($output);
    }
    public function insert($graphID,$simpulMulai,$simpulAkhir,$jarak){
        $sql = "
            INSERT INTO `tb_graf`(`graphID`, `simpulMulai`, `simpulAkhir`, `jarak`)
            VALUES ('{$graphID}','{$simpulMulai}','{$simpulAkhir}','{$jarak}')
            ON DUPLICATE KEY UPDATE 
                simpulMulai = VALUES(simpulMulai),
                simpulAkhir = VALUES(simpulAkhir),
                jarak = VALUES(jarak)
            ";
        $this->db->query($sql);
        if($this->db->affected_rows()){
            return TRUE;
        }
        return FALSE;
        
    }
}
