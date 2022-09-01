<?php
$dsn = "mysql:host=localhost;dbname=login1";
$user ='root';
$password = '';
try{
    $db = new PDO($dsn,$user,$password);

    echo "done";
}

catch(PDOEXCEption $e){
    echo "failed to connect";
    $e->getline();
}
   
    if(isset($_POST['save'])){
        $username =$_POST['username'];
        $txt =$_POST['txt'];
    
        $stmt =$db->prepare( "INSERT INTO mus(username,	txt	) VALUES(:s,:t)" );
        $stmt->execute(array(
            's' => $username,
            't' => $txt,
        ));
}
?>