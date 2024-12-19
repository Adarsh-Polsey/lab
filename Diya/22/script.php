<?php
    if($_POST){
        $regno = $_POST['regno'];

        $con = pg_connect("host = localhost port = 5433 dbname = postgres user = postgres password = devagiri");

        if($con){
            
            $qry = " select * from students where rollno = '$regno'";

            $result = pg_query($con, $qry);

            while($row = pg_fetch_row($result)){
                echo "<table style='font-size:35px;margin: auto;margin-top: 20%;' border='1' width='500px'><tr><th>Roll-No: $row[0] <br> Name: $row[1] <br> Mark: $row[2] <br> Grade: $row[3]</th> </tr> </table>"."\n";
            }
        }
        else{
            echo "connection failed";
            pg_close($con);
        }
    }


?>