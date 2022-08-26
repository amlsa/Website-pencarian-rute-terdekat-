<?php

class Astar
{

    public $start = '';

    public $goal = '';

    public $vertex = array();

    public $distanceFromStart = array();

    public $heuristicDistance = array();

    public $distance = array();

    public $prevVertex = array();

    public $graph = array();

    public $graphNama = array();

    public $openList = array();

    public $closeList = array();

    public $missingVertex = array();

    public $detail = '';

    /**
    * Fungsi ini pertama kali dipanggil dan diinisialiasai data heuristik,graf, start (starting point atau lokasi awal), dan goal(lokasi tujuan),
    * serta memanggil method run untuk menjalankan algoritma Astar
    *
    * @param array $heuristik
    * @param array $graph
    * @param array $graphNama
    * @param string $start
    * @param string $goal
    */
    public function __construct($heuristik, $graph, $graphNama, $start, $goal)
    {
        $this->start = $start;
        $this->goal = $goal;
        $this->vertex = array_keys($heuristik);
        $this->graph = $graph;
        $this->graphNama = $graphNama;
        $this->heuristicDistance = $heuristik;

        $this->run();
    }
    /**
     * Fungsi ini adalah fungsi utama untuk menjalankan algoritma Astar
     */
    public function run()
    {
        /*
         * Pada awal proses, open list diisi dengan lokasi awal, distanceFromStart (jarak dari lokasi awal) diset menjadi 0, dan jarak (h + n) diatur
         * Serta current_vertex atau vertex saat ini di set menjadi string kosong('').
         */
        $this->openList[$this->start] = $this->start;
        $this->distanceFromStart[$this->start] = 0;
        $this->distance[$this->start] = $this->distanceFromStart[$this->start] + $this->heuristicDistance[$this->start];
        /*
         * Lakukan perulangan sampai vertex saat ini tidak sama dengan goal
         */
        $current_vertex = '';
        $detail = '<br/>';
        while ($current_vertex != $this->goal) {

            $openList_ = array();
            /*
             * Jika vertex saat ini bernilai '' maka atur nilai $node_ dengan lokasi awal
             * Jika tidak :
             * Lakukan perulangan terhadap open list kemudian masukan suksesor dari vertex saat ini ke dalam open list
             * Urutkan jarak terpendek dari data openlist
             * Atur nilai $node_ menjadi elemen pertama dari urutan
             */
            if ($current_vertex == '') {
                $node_ = $this->start;
                $detail .= "";
            } else {
                $detail .= "<div class='bg-primary text-white'><b>Prev :</b>" .$this->graphNama[$current_vertex] . "<br/></div>";
                foreach ($this->openList as $node) {
                    if (isset($this->graph[$node])) {

                        if ($this->graph[$node] > 0) {
                            $openList_[$node] = $this->distance[$node];
                        }
                    }
                }
                asort($openList_, SORT_NUMERIC);
                $node_ = current(array_keys($openList_));
            }
            /*
             * Jika terdapat $node_ di dalam graph maka
             * Lakukan perulangan
             * Lakukan pengecekan tiap nilai yang ada di dalam open list
             * Jika jarak terbaru lebih kecil dari jarak lama, maka ganti jarak baru dengan jarak lama
             * Atur Prev next(node yang menjadi penghubung sebelumnya) dengan $node_
             * Pindahkan $node_ dari open list ke dalam close list
             * Jika tidak terdapat $node_ di dalam grah maka break, yang artinya jalur tidak ditemukan
             */

            if (isset($this->graph[$node_])) {

                foreach ($this->graph[$node_] as $node => $distance) {
                    if (! array_key_exists($node, $this->closeList)) {
                        $this->openList[$node] = $node;
                        if (array_key_exists($node, $this->distance)) {
                            if ($this->distance[$node] > ($this->distanceFromStart[$node_] + ($this->distanceFromStart[$node] + $this->heuristicDistance[$node]))) {
                                $this->distanceFromStart[$node] = $this->distanceFromStart[$current_vertex] + $this->distanceFromStart[$node];
                                $this->distance[$node] = $this->distanceFromStart[$node_] + ($this->distanceFromStart[$node] + $this->heuristicDistance[$node]);

                                $detail .= "f({$this->graphNama[$node]}) = h({$this->prevVertex[$node]}) + g({$this->prevVertex[$node]})\n";
                                $detail .= "f({$this->graphNama[$node]}) = {$this->distanceFromStart[$current_vertex]} + {$this->distanceFromStart[$node]}\n";
                                $detail .= "f({$this->graphNama[$node]}) = {$this->distance[$node]}\n";
                                $detail .= "<br/>";
                            }
                        } else {
                            $this->distanceFromStart[$node] = $this->distanceFromStart[$node_] + $distance;
                            $this->distance[$node] = $this->distanceFromStart[$node] + $this->heuristicDistance[$node];
                            $this->prevVertex[$node] = $node_;

                            $detail .= "f({$this->graphNama[$node_]}) = h({$this->graphNama[$node_]}) + g({$this->graphNama[$node]})\n";
                            $detail .= "f({$this->graphNama[$node]}) = {$this->distanceFromStart[$node_]} + {$this->heuristicDistance[$node]}\n";
                            $detail .= "f({$this->graphNama[$node]}) = {$this->distance[$node]}\n";
                            $detail .= "<br/>";
                        }
                    }
                }
                
                
                unset($this->openList[$node_]);
                $ol = $this->openList;
                $ol = array_map(function($a){
                    return $this->graphNama[$a];
                }, $ol);
                $detail.= "<div class='bg-info text-white'>Open List :<br/>&nbsp;".implode("<br/>&nbsp;", $ol)."<br/></div>";
                $this->closeList[$node_] = $node_;
                
                
                $cl = $this->closeList;
                $cl = array_map(function($a){
                    return $this->graphNama[$a];
                }, $cl);
                
                $detail.= "<div class='bg-success text-white'>Close List :<br/>&nbsp;".implode("<br/>&nbsp;", $cl)."<br/></div>";
            } else {
                break;
            }
            $detail .= "<div class='bg-primary text-white'><b>Next :</b>" . $this->graphNama[$node_] . "<br/></div>";
            
            /*
             * Atur $node sebagai next vertex atau node selanjutnya yang memiliki jarak terpendek
             */
            $current_vertex = $node_;
            /*
             * Lakukan sampai node saat ini sama dengan node tujuan, yang berarti bahwa perhitungan telah selesai dan jarak dan path sudah ditemukan
             */
            $detail .= "---------------------------------------------------------------------------------<br/>";
        }
        $this->detail = "" . $detail . "";
    }

    public function getDetailPerhitungan()
    {
        return $this->detail;
    }

    /**
     * Unutk mendapatkan jarak dari lokasi awal ke lokasi tujuan
     *
     * @return string|mixed
     */
    public function getDistance()
    {
        return isset($this->distance[$this->goal]) ? $this->distance[$this->goal] : 'JARAK_TIDAK_DIKETAHUI';
    }

    /**
     * Untuk mendapatkan path atau jalur yang dilalui dari lokasi asal ke lokasi tujuan
     *
     * @return array
     */
    public function getPath()
    {
        $temp_ = array();
        $next = '';
        if ($this->getDistance() != 'JARAK_TIDAK_DIKETAHUI') {
            while (true) {
                if (empty($temp_)) {
                    $temp_[] = $this->goal;
                    $temp_[] = @$this->prevVertex[$this->goal];
                    $next = $this->prevVertex[$this->goal];
                } else {
                    $temp_[] = @$this->prevVertex[$next];
                    $next = @$this->prevVertex[$next];
                }
                if ($next == $this->start) {
                    break;
                }
            }
            return array_reverse($temp_);
        }
    }
}