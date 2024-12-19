<?php
    if(isset($_POST['submit']))
    {
        $basic_salary = $_POST['salary'];
        $design= $_POST['design'];
        $n=$_POST['name'];
        if($design=="Manager")
            {
                $allowance = 1000;
                $extra=500;
        }
        elseif($design=='Supervisor')
            {
                $allowance = 750;
                $extra=200;
        }
        elseif($design=='Clerk')
            {
                $allowance = 500;
                $extra=100;
        }
        elseif($design=='Peon')
            {
                $allowance = 250;
                $extra=0;
        }
        else
            {
                $allowance = 0;
                $extra=0;
        }

        $hra=$basic_salary*25/100;
        $gross=$basic_salary+$hra+$allowance+$extra;

        if($gross<=200)
            {
                $tax=0;
        }
        elseif($gross<=4000 && $gross>2000)
            {
                $tax=$gross*3/100;
        }
        elseif($gross<=5000 && $gross>4000)
            {
                $tax=$gross*5/100;
        }
        else
            {
            $tax=$gross*8/100;    
        }
        $net=$gross-$tax;

        echo "<center><h1>Payslip</h1>
        <table border='1' width='20%'> 
        <tr> <td>Name</td> <td><center>$n</center></td></tr> 
        <td>Designation</td> <td><center>$design</center></td></tr>
        <td>Basic Pay</td> <td><center>$basic_salary</center></td></tr>
        <td> ConveyanceAllowance</td> <td><center>$allowance</center></td></tr>
        <td>Extra Allownace</td> <td><center>$extra</center></td></tr>
        <td>Gross Income</td> <td><center>$gross</center></td></tr>
        <td><b>Net Income</b></td> <td><b><center>$net</center></b></td></tr>


        </table><center>";

    }
?>