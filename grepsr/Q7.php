<!-- <form action="Q7.php" method="post">
    <input type="password" name="password" />
    <input type="submit" />
</form> -->
<?php

//$password = $_POST["password"];

function pwd($password){

if (strlen($password)>=8 && strlen($password)<=14){

    if(preg_match('/[A-Z]/',$password)){

        if(preg_match('/[a-z]/',$password)){

            if(preg_match('/[0-9]/',$password)){

                if(preg_match('/[!,@,#,$,%,^,&,*]/',$password)){

                    return 1;
                }

                else {
                    echo("At least 1 special character not found.");
                }
                
            }

            else {
                echo("At least 1 numeric character not found.");
            }
 
        }

        else {
            echo("At least 1 Lower Case Not found.");
        }
            
    }

    else {
        echo("At least 1 Upper Case not found.");
        
    }

    
    
}

else {
    return 0;
}

}
$password="Bn@ya10923";

echo (pwd($password));

echo ("<br>");
// echo ($password);
?>

