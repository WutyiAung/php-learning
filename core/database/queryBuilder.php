<?php
 class queryBuilder{
    protected $pdo;
    protected $dataArr;
    protected $table;
    public function __construct($pdo)
    {
     $this->pdo = $pdo;   
    }
    public function Fetch($table){
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    
    // public function insert($dataArr,$table){
    //     $arrayKey = array_keys($dataArr);//array
    //     $cols = implode(",",$arrayKey);//string
    //     $questionMark = "";
    //     foreach($arrayKey as $key){
    //         $questionMark .= "?," ;
    //     }
    //     $questionMark = rtrim($questionMark,",");
    //     $sql = "insert into $table ($cols) values ($questionMark)";
    //       $statement= $this->pdo->prepare($sql);
    //       $dataValue = array_values($dataArr);
    //       return $statement->execute($dataValue);

    // }
    public function insert($table ,$dataArr){
        $arrKey =array_keys($dataArr);
        $cols = implode(",",$arrKey);
        $questionMark ="";
        foreach ($arrKey as $key){
            $questionMark .= "?,";
        }
        $questionMark = rtrim($questionMark,",");
        $sql = "insert into $table ($cols) values ($questionMark)";
        $statement = $this->pdo->prepare($sql);
        $dataValue = array_values($dataArr);
        $statement->execute($dataValue);
    }
    public function delete($table,$dataArr){
        $arrKey = array_keys($dataArr);
        $cols = implode(",",$arrKey);
        $dataValue = array_values($dataArr);
        $questionMark ="";
        foreach ($arrKey as $key){
            $questionMark .= "?,";
        }
        $questionMark = rtrim($questionMark,",");
        $sql = "delete from $table where $cols =$questionMark";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($dataValue);
    }

    public function update($table,$dataArr){
        $arrayKey =array_keys($dataArr);
        $name = $arrayKey[0];

        $arrValues = array_values($dataArr);
        $oldValue = $arrValues[0];
        $updateValue = $arrValues[1];

        $sql = "update $table set $name=? where $name =?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$updateValue,$oldValue]);
    }


 }
?>