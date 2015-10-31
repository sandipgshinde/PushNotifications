<?php
    require_once("model.php");
    class userModel extends Model{        
        public function __construct(){
            parent::__construct();
        }
        /*
         * Function: getUser
         * @access: Public
         * @param: username, password
         * @return: Success: User detail, Failure: empty array/error message
        */
        public function getUser($username, $password){
            try {
                //generate hash using salt and user password
                $password   =   md5(PN_DB_PASSWORD_SALT.$password);
                //Construct SQL, prepare and execute sql to validate user
                $sql    =   "SELECT * FROM users WHERE email_id=:emailId AND password=:password";   
                $stmt   =   $this->db_connection->prepare($sql);
                $stmt->execute(array(':emailId' => $username, ':password' => $password));
                return $stmt->fetchAll(PDO::FETCH_ASSOC);                
            } catch(PDOException $ex) {
                return 'An error occured please try again';
            }
        }
    }
?>
