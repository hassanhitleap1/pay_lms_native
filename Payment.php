
<?php


class Payment{


    public function __constructor(){

    }


    public function getAllCard(){
        return " select * from  card_custum";
    }


    public function getCardByCode($code){
        return " select * from  card_custum where code=".$code ." limit 1";
    }


    public function setTryuserEnterdCard($userid,$cardid){
        return "insert into try_enterd_card ('card_id','user_id','date') values('$cardid','$userid',now())";

    }

    public function genarateCode($count){
        $insert="";
        for ($i=0; $i <count ; $i++) { 
            $randnum = rand(11111111111111,99999999999999);
            $object="select * from  card_custum where code=".$randnum ;
            if(empty($object)){
                $insert.="insert into card_custum (code) values('$randnum')";
            }
        }
    }

}
?>