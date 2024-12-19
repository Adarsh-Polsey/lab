<html>
  <head>
    <style>
        table {
          border: 1px solid black;
          margin: auto;
          margin-top: 15%;
        }
    </style>
  </head>
<body>
<table>
  <tr>
    <td>
      <form method="post">
        <input type="radio" name="choice" value="display"> Display Array<br>
        <input type="radio" name="choice" value="sort"> Sorted Array<br>
        <input type="radio" name="choice" value="dupli"> Without Duplicate <br>
        <input type="radio" name="choice" value="rem"> Delete Last<br>
        <input type="radio" name="choice" value="rev"> Array Reverse <br>
        <input type="radio" name="choice" value="search"> Array Search<br>
        <input type="text" name="tosr">
        <input type="submit">
        <br>
        <?php
            if ($_POST) {
                $names = array("jo","rapahel","michael","gabriel","noah","adam","adam","wren","noah","vihan");
                $val = $_POST["choice"];
                $tosearche = isset($_POST["tosr"]) ? $_POST["tosr"] : ''; 
                
                switch ($val) {
                    case "display":
                    
                        foreach ($names as $index => $value) {
                            echo "<br>" . ($index + 1) . ". " . $value; 
                        }
                        break;
                    case "sort":
                        sort($names);
                       
                        foreach ($names as $index => $value) {
                            echo "<br>" . ($index + 1) . ". " . $value;
                        }
                        break;
                    case "dupli":
                        $uarray = array_unique($names);
                        
                        foreach ($uarray as $index => $value) {
                            echo "<br>" . ($index + 1) . ". " . $value;
                        }
                        break;
                    case "rem":
                        array_pop($names);
                     
                        foreach ($names as $index => $value) {
                            echo "<br>" . ($index + 1) . ". " . $value;
                        }
                        break;
                    case "rev":
                        $revarr = array_reverse($names);
                    
                        foreach ($revarr as $index => $value) {
                            echo "<br>" . ($index + 1) . ". " . $value;
                        }
                        break;
                    case "search":
                        if (empty($tosearche)) {
                            echo "<br/>Please enter a term to search.";
                        } else {
                            $position = array_search($tosearche, $names, true);
                            if ($position !== false) {
                                echo "<br/><br/>Position of \"" . $tosearche . "\" is " . ($position + 1); 
                            } else {
                                echo "<br/><br/>\"" . $tosearche . "\" not found in the array.";
                            }
                        }
                        break;
                }
            }
        ?>
      </form>
    </td>
  </tr>
</table>
</body>
</html>
