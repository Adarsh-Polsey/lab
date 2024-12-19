
<html>
    <head>
        <title>Fibonacci</title>

        <style>
            table{
                    border: 1px solid black;
                    margin: auto;
                    margin-top: 20%;
                }   
        </style>

    </head>
    <body>
        
        <table>
            <th>
                <form method="post">
                <h2>Fibonacci Series</h2>
                Enter the number:
                <input type="number" name="number">
                <br> <br>
                <input type="submit" value="Submit">

                <?php
                    if ($_POST) {
                        $_limit = $_POST['number'];
                        echo "<br>";
                        $n1 = 0;
                        $n2 = 1;

                        echo $n1 . "<br>";
                        echo $n2 . "<br>";

                        $n3 = $n1 + $n2;

                        while ($n3 <= $_limit) {
                            echo $n3 . "<br>";
                            $n1 = $n2;
                            $n2 = $n3;
                            $n3 = $n1 + $n2;
                        }
                    }
                ?>
                </form>
            </th>
        </table>
    
    </body>
</html>
