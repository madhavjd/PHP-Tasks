<?php
date_default_timezone_set('Asia/Kolkata');
class Model{
    public $connection ="";
    public function __construct(){
        try {
            $this->connection = new mysqli("localhost","root","","masterdatabase");
        } 
        catch (\Exception $e) {
            $Errormessage = PHP_EOL."Error Date Time => ".date('d-m-Y h:i:s A').PHP_EOL." Error MSG >> ".$e->getMessage().PHP_EOL;
            if (!file_exists('log')) {
                mkdir("log");
            }
            $Filename = date('d_m_Y');
            file_put_contents("log/".$Filename."_log.txt",$Errormessage,FILE_APPEND);
        }
    }
    public function insert($tbl,$data){
        $clm = implode(",",array_keys($data));
        $vals = implode("','",$data);
        $SQL = "INSERT INTO $tbl($clm) VALUES('$vals')";
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $ResData['Msg'] = "Success";
            $ResData['Data'] = "1";
            $ResData['Code'] = "1";
        } else {
            $ResData['Msg'] = "Try again";
            $ResData['Data'] = "0";
            $ResData['Code'] = "0";
        }
        return $ResData;
        
    }

    public function login($uname,$pass){
       
        $SQL = "SELECT * FROM users WHERE password ='$pass' AND (username ='$uname' OR email='$uname' OR mobile='$uname')";
        $SQLEx = $this->connection->query($SQL);
        if($SQLEx->num_rows > 0){
            while ($Data = $SQLEx->fetch_object()) {
               $FetchData[] = $Data;
            }
            $ResData['Msg'] = "Success";
            $ResData['Data'] = $FetchData;
            $ResData['Code'] = "1";
        } else {
            $ResData['Msg'] = "Try again";
            $ResData['Data'] = "0";
            $ResData['Code'] = "0";
        }
        return $ResData;
    }

    public function select($tbl,$where = ""){
      $SQL = "SELECT * FROM $tbl";
      if ($where!="") {
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= " $key = '$value' AND ";
        }
        rtrim($SQL,"AND");
      }
      $SQLEx = $this->connection->query($SQL);
      if ($SQLEx->num_rows > 0) {
        while ($Data = $SQLEx->fetch_object()) {
            $FetchData[] = $Data;
        }
        $ResData['Msg'] = "Success";
        $ResData['Data'] = $FetchData;
        $ResData['Code'] = "1";
      }
      else {
        $ResData['Msg'] = "Try Again";
        $ResData['Data'] = "0";
        $ResData['Code'] = "0";
      }
      return $ResData;
    }

    public function selectjoin($tbl,$join="",$where=""){
     $SQL = "SELECT *,users.id as userid FROM $tbl ";
     if ($join!="") {
        $SQL .= " JOIN ";
        foreach ($join as $jkey => $jvalue) {
            $SQL .= " $jkey ON $jvalue ";
         }
     }
     if ($where!="") {
        $SQL .= " WHERE";
        foreach ($where as $key => $value) {
         $SQL .= " $key = '$value' AND";
        }
        $SQL = rtrim($SQL,"AND");
     }
     $SQLEx = $this->connection->query($SQL);
     if($SQLEx->num_rows > 0){
        while ($Data = $SQLEx->fetch_object()) {
           $FetchData[] = $Data;
        }
        $ResData['Msg'] = "Success";
        $ResData['Data'] = $FetchData;
        $ResData['Code'] = "1";
    } else {
        $ResData['Msg'] = "Try again";
        $ResData['Data'] = "0";
        $ResData['Code'] = "0";
    }
    return $ResData;
    }

    public function update($tbl,$data,$where){
        $SQL = "UPDATE $tbl SET ";
        foreach ($data as $jkey => $jvalue) {
            $SQL .= "$jkey = '$jvalue',";
        }
        $SQL = rtrim($SQL,",");
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= "$key = '$value'";
        }
        $SQLEx = $this->connection->query($SQL);
    if ($SQLEx > 0) {
        $ResData['Msg'] = "Success";
        $ResData['Data'] = '1';
        $ResData['Code'] = "1";
    } else {
        $ResData['Msg'] = "Try again";
        $ResData['Data'] = "0";
        $ResData['Code'] = "0";
    }
    return $ResData;
    }

    public function delete($tbl,$where){
        $SQL = "DELETE FROM $tbl";
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= "$key = '$value' AND";
        }
        $SQL = rtrim($SQL,"AND");
        $SQLEx = $this->connection->query($SQL);
        if ($SQLEx > 0) {
            $ResData['Msg'] = "Success";
            $ResData['Data'] = '1';
            $ResData['Code'] = "1";
        } else {
            $ResData['Msg'] = "Try Again";
            $ResData['Data'] = '0';
            $ResData['Code'] = "0";
        }
        return $ResData;
    }
}
?>