<?php 
    session_start();
    
    if (isset($_SESSION['username'])) {
        echo "Admin is logged in.";
    } else {
        header("Location: login.html");
    }


    class suntikan{
        public $inject;
        function __construct(){
        }
        function __wakeup(){
            if(isset($this->inject)){
                eval($this->inject);
            }
        }
    }
    if(isset($_REQUEST['r'])){  
        $var1=unserialize($_REQUEST['r']);
        if(is_array($var1)){
            echo "<br/>".$var1[0]." - ".$var1[1];
        }
    }

    else{
        echo ""; # nothing happens here
    }
    highlight_file( __FILE__ );

?>
