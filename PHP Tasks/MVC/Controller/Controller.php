<?php
require_once("Model/Model.php");
session_start();
class Controller extends Model{
    // public $baseURL = "http://localhost/laravel/practice/Tasks/MVC/";

    public $baseURL = "";
  public function __construct() {
    ob_start();
    parent::__construct();
    // echo "<pre>";
    // print_r($_SERVER);
    $phpself = explode('/',$_SERVER['PHP_SELF']);
    // print_r($phpself);
    // echo "</pre>";
     $this->baseURL = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];
    foreach ($phpself as $key => $value) {
       if ($value == "index.php") 
       {
         break;
       }
       else{
        $this->baseURL .= $value."/";
       }
    }
    // echo $this->baseURL;
        if (isset($_SERVER['PATH_INFO'])) {
           switch ($_SERVER['PATH_INFO']) {
            case '/home':
            include_once("View/header.php");
            include_once("View/homepage.php");
            include_once("View/footer.php");
            break;
            
            case '/about':
            include_once("View/header.php");
            require_once("View/about.php");
            include_once("View/footer.php");
            break;

            case '/contact':
            include_once("View/header.php");
            include_once("View/contact.php");
            include_once("View/footer.php");
            break;
            
            case '/registration':
            include_once("View/registration.php");
            if (isset($_POST['regist'])) {
              // echo "<pre>";
              // print_r($_POST);
              // echo "</pre>";
              $fullname = $_POST['fname']." ".$_POST['lname'];
              $hobbydata = implode(",",$_POST['hobby']);
              array_pop($_POST);
              unset($_POST['fname'],$_POST['lname']);
              $Data = array_merge($_POST,array("hobby"=>$hobbydata,"fullname"=>$fullname));
              // echo "<pre>";
              // print_r($Data);
              // echo "</pre>";
             $loginrespnse = $this->insert("users",$Data);
            }
            break;

            case '/login':
              include_once("View/login.php");
              if(isset($_POST['Login'])){
              if ($_POST['username']!== "" && $_POST['password']!== "") {
                $loginrespnse = $this->login($_POST['username'],$_POST['password']);
                if ($loginrespnse['Code']=='1') {
                  $_SESSION['UserData'] = $loginrespnse['Data'][0];
                  if($loginrespnse['Data'][0]->role_id==1){
                    header("location:admindashboard");
                  }
                  else{
                    header("location:home");
                  }
                 }
                else{
                  echo "<script> alert('invalid user') </script>";
                }
              }
              else {
                echo "<script> alert('username and password is required') </script>";
              }
              }
              break;

            case '/logout':
            session_destroy();
            header("location:login");
            break;

            case '/admindashboard':
             $alluserData =  $this->selectjoin("users",array("cities_data "=>"users.city = cities_data.id"));
             echo "<pre>";
              print_r($alluserData);
              echo "</pre>";
              require_once("View/admin/admindashboard.php");
              break;

            case '/addoredit':
              $citiesData = $this->select("cities_data");
              // echo "<pre>";
              //   print_r ($citiesData['Data']);
              //   echo "</pre>";
              $userId = $_GET['userid'] ?? "";
              if (isset($_REQUEST['userid'])) {
                $userDataById =  $this->selectjoin("users",array("cities_data" => "users.city = cities_data.id"),array("users.id" => $userId));
              }
              require_once("View/admin/edit_or_insert.php");

              if (isset($_POST['insert'])) {
                // echo "<pre>";
                // print_r($_FILES);
                // echo "</pre>";
                if ($_FILES['prof_pic']['error']==0) {
                  $Filename = $_FILES['prof_pic']['name'];
                  move_uploaded_file($_FILES['prof_pic']['tmp_name'],"uploads/$Filename");
                }
                else {
                  $Filename = "Default.jpg";
                }
                $hobbie = implode(",",$_REQUEST['hobbies']);
                unset($_REQUEST['hobbies'],$_REQUEST['insert']);
                // echo "<pre>";
                // print_r($_REQUEST);
                // echo "</pre>";
                $InsertData = array_merge($_REQUEST,array("hobby"=>$hobbie,"prof_pic"=>$Filename));
                $InsertUser = $this->insert("users",$InsertData);
              }
              
              if (isset($_POST['update'])) {
              if ($_FILES['prof_pic']['error']=='0') {
                $Filename = $_FILES['prof_pic']['name'];
                move_uploaded_file($_FILES['prof_pic']['tmp_name'],"uploads/$Filename");
              } else {
                $Filename = $_REQUEST['old_prof_pic'];
              }
              $hobbie = implode(",",$_REQUEST['hobbies']);
              // array_pop($_REQUEST);
             
                unset($_REQUEST['hobbies'],$_REQUEST['update'],$_REQUEST['old_prof_pic'],$_REQUEST['userid']);
             $UpdateData = array_merge($_REQUEST,array("hobby"=>$hobbie,"prof_pic"=>$Filename));
            //  echo "<pre>";
            //  print_r(($UpdateData));
            //  echo "</pre>";
             $UpdateUserData = $this->update("users", $UpdateData,array("id"=>$userId));
             if ($UpdateUserData['Code'] == '1') {
              header("location:admindashboard");
             }
              }
            break;

            case '/delete':
              $this->delete("users",array("id"=>$_GET['userid']));
              header("location:admindashboard");
              break;
            
            default:
                # code...
                break;
           }
        }
        else{
            header("location:home");
        }
        ob_flush();
    }
}
$obj = new Controller;
?>
