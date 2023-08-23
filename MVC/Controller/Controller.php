<?php
include_once("Model/Model.php");
session_start();
class Controller extends Model{
   public $baseURL = "";
    public function __construct(){
        ob_start();
        parent::__construct();
        $phpself = explode("/",$_SERVER['PHP_SELF']);
        $this->baseURL = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST'];
        foreach ($phpself as $key => $value) {
            if ($value == "index.php") {
                break;
            } else {
              $this->baseURL .= $value."/";
            }
        }
        if (isset($_SERVER['PATH_INFO'])) {
          switch ($_SERVER['PATH_INFO']) {
            case '/home':
             include_once("View/header.php");
             include_once("View/homepage.php");
             include_once("View/footer.php");
             break;

             case '/registration':
            if (isset($_POST['register'])) {
              $hobbydata = implode(",",$_REQUEST['hobbies']);
             if ($_FILES['profile_picture']['error']==0) {
                $Filename = $_FILES['profile_picture']['name'];
                move_uploaded_file($_FILES['profile_picture']['tmp_name'],"uploads/$Filename");
             } else {
                $Filename="";
             }
             unset($_REQUEST['register'],$_REQUEST['hobbies'],$_REQUEST['profile_picture']);
             $InsertUserData = array_merge($_REQUEST,array("hobbies"=>$hobbydata,"profile_picture"=>$Filename));
             $InsertUser = $this->insert("users",$InsertUserData);
            }
            //   include_once("View/header.php");
              include_once("View/registration.php");
            //   include_once("View/footer.php");
              break;

            case '/login':
            if (isset($_POST['Login'])) {
            if ($_POST['username']!=="" && $_POST['password']!=="") {
                $loginresponse = $this->login($_POST['username'],$_POST['password']);
                if ($loginresponse['Code']=="1") {
                    header("location:home");
                } else {
                    echo "<script>alert('Invalid User')</script>";
                }      
            } else {
                echo "<script>alert('username and password is required')</script>";
            }
            }
            include_once("View/login.php");
            break;

            case '/users':
            $alluserdata = $this->select("users");
            include_once("View/userdashboard.php");
            break;

            case '/addoredit':
            $id = $_GET['id']??"";
            if (isset($_REQUEST['id'])) {
               $userdatabyid = $this->select("users",array("id"=>$id));
            //    echo "<pre>";
            //    print_r($userdatabyid['Data'][0]);
            }
            include_once("View/registration.php");
            if (isset($_POST['update'])) {
             $hobbydata = implode(",",$_REQUEST['hobbies']);
             if ($_FILES['profile_picture']['error']==0) {
               $Filename = $_FILES['profile_picture']['name'];
               move_uploaded_file($_FILES['profile_picture']['tmp_name'],"uploads/$Filename");
             }else{
                $Filename = $userdatabyid['Data'][0]->profile_picture;
             }
             unset($_REQUEST['hobbies'],$_REQUEST['profile_picture'],$_REQUEST['update']);
             $updateuserdata = array_merge($_REQUEST,array("profile_picture"=>$Filename,"hobbies"=>$hobbydata));
             echo "<pre>";
             print_r($updateuserdata);
             $updateuser = $this->update("users",$updateuserdata,array("id"=>$id));
             if ($updateuser['Code']==1) {
                header("location:users");
             }
            }
            break;

            case '/delete':
            $this->delete("users",array("id"=>$_GET['id']));
            header("location:users");
            break;

            default:
            
                break;
          }
        } else {
            # code...
        }
        




    }
}
$obj = new Controller;
?>