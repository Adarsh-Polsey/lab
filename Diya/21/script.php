<?php

if($_POST){
    $username = $_POST['uname'];
    $password = $_POST['passwd'];

    $con = pg_connect("host = localhost port=5433 dbname=postgres user=postgres password=devagiri");

    if($con){
        echo "<center><b><h1>connection established 
</h1></b></center>";

        $qry = "select * from logintble where username = '$username' and password = '$password' ";

        $result = pg_query($con,$qry);

        $nos = pg_num_rows($result);

        if($nos){
            echo " <br><center><b><h1> $username, Login Succesfull.</h1></b> </center> <br>";
        }
        else{
            echo "<center><b>Incorrect Username and Password</b></center> <br>";
        }

    }
    else{
        echo "Error Connecting to Database";
        pg_close($con);
    }

}

?>