    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="fname">
        <input type="submit" value="submit">
    </form>
    <?php

         if($_SERVER['REQUEST_METHOD'] == 'POST'){
             $name=$_POST['fname'];
             echo $name;
         }else {
             echo "idkjf fjlf";
         }
        ?>