<?php


class Flat
{
    public function __construct()
    {
        $this->setAddres();
        include_once (DATA_DIR.'houses/houseSelect.php');
        $this->getCurrent();
        $this->db = new PDO(DSN, DB_USER, DB_PASS);
        $this->getArchive();
        $this->getOwner();
    }

    private function setAddres(){
        if (isset($_POST['house'])){
        $this->house = $_POST['house'];
        $this->flat = $_POST['kv'];
        } else {
            if (isset($_COOKIE['flat'])) $this->flat = $_COOKIE['flat'];
            else $this->flat = 1;
            if (isset($_COOKIE['house'])) $this->house = $_COOKIE['house'];
            else $this->house = 'Ленина 59';
        }
        if ($this->flat == "Все"){$this->flat = 1;}
        if ($this->house == "Все адреса") {$this->house = 'Ленина 59';}

        setcookie('flat',$this->flat);
        setcookie('house',$this->house);
    }

    private function sendMsg($msg){
            $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);

            $len = strlen($msg);

            socket_sendto($sock, $msg, $len, 0, '192.168.0.120', 11000);

            if (false !== ($bytes = socket_read($sock, 2048))) {
                $bytes0 = mb_convert_encoding($bytes,"UTF-8","windows-1251");
                $result = explode(" ",$bytes0);
            } else {
                setError("Ошибка получения данных: " . socket_strerror(socket_last_error($sock)) . "\n");
            }
            socket_close($sock);
            if (strpos($msg,'m203')){
                $result[2] = $this->format($result[2]);
                $result[3] = $this->format($result[3]);
            } else {
                $result[1] = $this->format($result[1]);
                if ($result[2] != 1) {
                    $result[2] = "Исправен";
                }else{
                    $result[2] = "Саботаж";
                }
            }
            return $result;
    }

    private function format($msg){
        if ($msg !== "null") {
            $msg = ltrim($msg, "0");
            $length = strlen($msg)-2;
            if ($length == 0) {$answer = "0,".$msg;}
            elseif ($length < 0) {$answer = "0,0".$msg;}
            else {
                $answer = substr($msg,0,$length).",".substr($msg,-2);
            }
        }
        else {$answer = "неисправен";}
        return $answer;
    }

    private function getCurrent(){
        $count=count($this->chanals);
            for($k=1;$k<$count;$k++){
                $nBTS = $this->chanals[$k];
                $c=$k-1;
                $chanal = $this->chanals[$c]*4;
                $BTS = "$this->ipAddres $nBTS $chanal 0 read ks";
                $this->result['water'][] = $this->sendMsg($BTS);
                $k++;
            }
            $SN0=explode("_",$this->sensors[8]);
            $SN=$SN0[1];
            //$Electro = "$ipAddres $rsNum 0 $SN m203read ks";

            //режим проверки  закоментить строку выше снять комент со строки ниже
            $Electro = "$this->ipAddres $this->rsNum 0 $SN m203read ks";

            $this->result['electro'][] = $this->sendMsg($Electro);
    }

    private function getArchive(){
        $k = -1;
        foreach ($this->sensors as $item) {
            if (strpos($item, 'VD')) {
                $k++;
                $sql = "SELECT v1i, ts FROM archdata_bts2 WHERE devid = '{$item}' ORDER BY ts DESC LIMIT 1";
                $queryResult = $this->db->query($sql);
                $this->result['water'][$k][3] = array_unique($queryResult->fetch());
            }elseif (strpos($item,'RC')){
                $k++;
               $sql = "SELECT e1i, e2i, ts FROM archdata_mrc2 WHERE devid='{$item}' ORDER BY ts DESC LIMIT 1";
                $queryResult = $this->db->query($sql);
                //$result[] = array_unique($queryResult->fetchAll());
                $this->result['electro'][0][6] = array_unique($queryResult->fetch());
            }
        }
        $this->result['electro'][0][6]['e1i'] = round($this->result['electro'][0][6]['e1i'], 2);
        $this->result['electro'][0][6]['e2i'] = round($this->result['electro'][0][6]['e2i'], 2);
    }

    private function getOwner(){
        $sql = "SELECT fio, dolg, phone, date FROM owners1c WHERE kv='$this->flat' AND adress='$this->house'";
        $queryResult = $this->db->query($sql);
        $this->owner = array_unique($queryResult->fetch());
        if (empty($this->owner['dolg'])) $this->owner['dolg'] == "0,00";
        myDump($this->owner);
    }
    
    public function showCounters(){
        return['cold'=> $this->result['water'][0][1],
                'coldStatus' => $this->result['water'][0][2],
                'coldArchive' =>round($this->result['water'][0][3]['v1i'],2),
                'coldTime'=>$this->result['water'][0][3]['ts'],
                'hot'=>$this->result['water'][1][1],
                'hotStatus' => $this->result['water'][1][2],
                'hotArchive' =>round($this->result['water'][1][3]['v1i'],2),
                'hotTime' => $this->result['water'][1][3]['ts'],
                'cold2'=>$this->result['water'][2][1],
                'cold2Status' => $this->result['water'][2][2],
                'cold2Archive' =>round($this->result['water'][2][3]['v1i'],2),
                'cold2Time'=>$this->result['water'][2][3]['ts'],
                'hot2'=>$this->result['water'][3][1],
                'hot2Status' => $this->result['water'][3][2],
                'hot2Archive' =>round($this->result['water'][3][3]['v1i'],2),
                'hot2Time' => $this->result['water'][3][3]['ts'],
                'T1'=>$this->result['electro'][0][2],
                'T2'=>$this->result['electro'][0][3],
                'electroStatus'=>$this->result['electro'][0][5],
                'T1Archive' =>round($this->result['electro'][0][6]['e1i'],2),
                'T2Archive' =>round($this->result['electro'][0][6]['e2i'],2),
                'electroTime' => $this->result['electro'][0][6]['ts']
            ];
    }

    public function showOwners(){
        return[
          "fio"=> $this->owner['fio'],
          "phone"=> $this->owner['phone'],
          "money"=> $this->owner['dolg'],
          "date"=> $this->owner['date']
        ];
    }
}