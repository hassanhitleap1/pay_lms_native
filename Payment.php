
<?php


class Payment{
    public $db;

    public function __construct($conn){
        $this->db = $conn->openConnection();
    }



    public function __destruct() {
        $this->db =null;
    }



    public function getAllCard(){
        $sql = "SELECT * FROM card_custum";
        return $this->db->query($sql);

    }




    public function getCardByCode($code){
        $stmt = $this->db->prepare("SELECT id FROM card_custum where number= ?");
        $stmt->execute([$code]);
       
        if($stmt->fetchColumn()){
           return true;
        }
        return false;
    }


    

    public function usedCard($cardid){
        $sql = "update card_custum set used=1 where number=?";
        $stmt= $this->db->prepare($sql);
        $stmt->execute([$cardid]);
    }



    public function setTryuserEnterdCard($userid,$cardid,$success){
        $sql = "INSERT INTO try_enterd_card (user_id, card_id,success,date) VALUES (?,?,?,now())";
        $stmt= $this->db->prepare($sql);
        $stmt->execute([$userid,$cardid,$success]);
    }

    public function genarateCode($length){
        $code="";
        $sql="";
        for ($i=0; $i <$length ; $i++) { 
            $code=$this->getRandomNumber($code);
            $stmt = $this->db->prepare("SELECT * FROM card_custum where number= ?");
            $stmt->execute([$code]);
            $count = $stmt->fetchColumn();
            if(!$count){
                $sql = "INSERT INTO card_custum (number, used) VALUES (?,?)";
                $stmt= $this->db->prepare($sql);
                $stmt->execute([$code,0]);
            }
         $code="";
        }
    }


    public function getRandomNumber($code){
        array_map(function($value) use(&$code){
            $code.=mt_rand(0, 9);
        }, range(0,14));
        return $code;
    }

}


 

?>