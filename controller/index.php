<?php
require_once("../config/constants.php");

/* TODO
 * If user log out fucntionality added, we can check for user session to redirect to home page
 */
$error_message  =   '';
//Check for form post
if(isset($_POST) && count($_POST)){
    //fetch username and password
    $username =  isset($_POST['username']) && trim($_POST['username']) != ''?trim($_POST['username']):false;
    $password =  isset($_POST['password']) && trim($_POST['password']) != ''?trim($_POST['password']):false;
    
    if($username !== false && $password !== false){
        require_once("../model/user.php");
        $userObj    =   new userModel();
        
        //validate user with provided credentials
        $user       =   $userObj->getUser($username, $password);
        if(is_array($user) && count($user)){
            
            //Authenticated: Set Session and redirect to home page
            session_start();
            $_SESSION['USER_ID']        =  $user[0]['id'];
            $_SESSION['USER_EMAIL_ID']  =  $user[0]['email_id'];
            $_SESSION['USER_FNAME']     =  $user[0]['first_name'];
            $url    =   PN_BASE_URL.'controller/home.php';
            header('Location: ' . $url);
            exit();       
        }else{
            //Not Authenticated: return with invalid credentials
            $error_message = 'Invalid credentials, please try again!';
        }
    }else{
        //Missing required fields
        $error_message = 'Login credentials are missing!';
    }
}
require_once("../views/index.php");
?>

