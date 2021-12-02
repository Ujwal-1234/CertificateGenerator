<!DOCTYPE html>
<html>
    <head>
        <title>Design_Yourself</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <form action="index1.php" method="POST">
            <textarea name="tarea"></textarea>
            <button type="submit" name="sbtn"> SUBMIT </button>
        </form>
        <?php
        if(isset($_POST['sbtn'])){
            $arr = explode("\r\n", trim($_POST['tarea']));
            for ($i = 0; $i < count($arr); $i++) {
               $line = $arr[$i];
               echo $i.' '.$line.'<br>';
               //session_start();
               //$_SESSION['name'] = $line;
               include_once "index.php";
               //session_unset();
               //session_destroy();
               //echo '<script>document.getElementById("name").value="";</script>'; 
            }
        }
        ?>
    </body>
</html>