<?php 
session_start();

// function logging_out(){
    if(isset($_SESSION['user'])){

        
        unset($_SESSION['user']);       
        session_destroy();
        echo " 
    <script>
        alert('You will be logged out');
        window.location.replace('../agentlogin.php');                
    </script>
    
    ";
    }
    else {
        unset($_SESSION['user']);       
        session_destroy();
        echo "
    <script>
        alert('You will be logged out');
        window.location.replace('../agentlogin.php');                
    </script>
    
    ";
    }

 
    echo "
    <script>
        alert('You will be logged out');
        window.location.replace('../agentlogin.php');                
    </script>
    ";
// }


?>