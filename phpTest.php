<?php
    
    //Connect to the database
    $host = "127.0.0.1";
    $user = "amishaj";                     //Your Cloud 9 username
    $pass = "";                                  //Remember, there is NO password by default!
    $db = "sherlock_db";                                  //Your database name you want to connect to
    $port = 3306;                                //The port #. It is always 3306
    
    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

//And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM SherlockCharacters";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "The character's name is " . $row['CharacterName'];
        echo "<br>";
        echo " and the actor's name is " . $row['ActorName'];
        echo "<br>";
    }
