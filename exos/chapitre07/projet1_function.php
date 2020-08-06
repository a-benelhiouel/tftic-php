<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
    *{
        box-sizing: border-box;
    }
    table {
	    display: table;
        border: medium solid darkblue;
    }
    table tr {
        border: medium solid darkblue;
    }
    table tr td {    
        border: thin solid darkred;
        min-width: 4ch;
    }
    </style>
    <title>Exo6.12a</title>
  </head>
  <body>
    <h2>Exo6.12a</h2>
    <?php


    $bigger = 0;
    $smaller = 0;

    $myTab = [20, 5, 24, 19, 18, 17, 16, 7,9, 15, 11, 13, 21];

    $selectedBigger = "";
    $selectedSmaller = "";
    $selectedAsc = "";
    $selectedDesc = "";

    echo "<h3>Unsorted Array</h3><table><tr>";
    foreach($myTab as $n) {
      echo "<td>$n</td>";
    };
    echo "</tr></table><br/>";

    if(isset($_POST["action"])) {
        $action = $_POST["action"];
    
        $selectedBigger = $action === "bigger" ? "selected" : "";
        $selectedSmaller = $action === "smaller" ? "selected" : "";
        $selectedAsc = $action === "asc" ? "selected" : "";
        $selectedDesc = $action === "desc" ? "selected" : "";
    }
    echo "
    <form action='#' method='post'>
        <label for='action'>Action</label>
        <select name='action' id='action'>
            <option value=''></option>
            <option value='bigger' $selectedBigger >Bigger</option>
            <option value='smaller' $selectedSmaller >Smaller</option>
            <option value='asc' $selectedAsc >Sort ascending</option>
            <option value='desc' $selectedDesc >Sort descending</option>
        </select>
        <input type='submit' value='Search'/>
    </form>
    ";

    if(isset($_POST["action"]) && ($_POST["action"]) != "") {
    $action = $_POST["action"];

    $selectedBigger = $action === "bigger" ? "selected" : "";
    $selectedSmaller = $action === "smaller" ? "selected" : "";
    $selectedAsc = $action === "asc" ? "selected" : "";
    $selectedDesc = $action === "desc" ? "selected" : "";

    //echo "<script>console.log($action)</script>";

    switch($action) {
        case "bigger":
            foreach($myTab as $n) {
                $bigger = $bigger > $n ? $bigger : $n;
            }
            echo "Bigger : $bigger";
            echo "<br/>";
        break;
        case "smaller":
            foreach($myTab as $n) {
                $bigger = $bigger > $n ? $bigger : $n;
            }
            $smaller = $bigger;
            foreach($myTab as $n) {
                $smaller = $smaller < $n ? $smaller : $n;
            }
            echo "Smaller : $smaller";
            break;
        case "asc":
            do {
                $sort = false;
            
                for($i = 1; $i < count($myTab); $i++) {
                    if($myTab[$i] < $myTab[$i-1]) {
                        $sort = true;
                        $temp = $myTab[$i-1];
                        $myTab[$i-1] = $myTab[$i];
                        $myTab[$i] = $temp;
                    }
                }
            } while ($sort);
            
            echo "<h3>Ascending order sorted Array</h3><table><tr>";
            foreach($myTab as $n) {
              echo "<td>$n</td>";
            };
            echo "</tr></table>";
            break;
        case "desc":
            do {
                $sort = false;
            
                for($i = count($myTab) - 2; $i >= 0; $i--) {
                    if($myTab[$i] < $myTab[$i+1]) {
                        $sort = true;
                        $temp = $myTab[$i+1];
                        $myTab[$i+1] = $myTab[$i];
                        $myTab[$i] = $temp;
                    }
                }
            } while ($sort);
            
            echo "<h3>Descending order sorted Array</h3><table><tr>";
            foreach($myTab as $n) {
              echo "<td>$n</td>";
            };
            echo "</tr></table>";
            break;
        default:
                echo "<p>Please select an action in the list</p><br>";
        }
    }

?>
  </body>
</html>