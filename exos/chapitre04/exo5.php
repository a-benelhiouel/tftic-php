<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Appréciation</title>
  </head>
  <body>
    <h2>Appréciation</h2>
    <form action="#" method="post">
        <label for="note">Note</label>
        <input type="number" name="note" id="note" value="10" min="0" max="20" step="0.5"/>
      <input type="submit" value="Evaluer" />
    </form>
    <?php

    if(isset($_POST["note"])) {
        $note = $_POST["note"];
        
        if ($note >= 19 && $note <= 20){
            echo "Excellent";
        }
        elseif ($note >= 16 && $note <= 18) {
            echo "TB";
        }
        elseif ($note >= 13 && $note <= 16) {
            echo "B";
        }
        elseif ($note >= 10 && $note <= 12) {
            echo "S";
        }
        elseif ($note >=0 && $note<10) {
                echo "I";
            }
        else {
            echo "Note invalide";
        }
        }

?>
  </body>
</html>
