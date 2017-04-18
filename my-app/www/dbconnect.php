<?php

    $host = "127.0.0.1";
    $user = "dany753";                    
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "USER_DB";                                  //Your database name you want to connect to
    $port = 3306;  
    //The port #. It is always 3306
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    
    
    
    $query = "Select * From USER_DB";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The ID is: " . $row['id'] . " and the Username is: " . $row['username']
    
?>
                            







