<?php
function pt_tt(){
    if(isset($_GET['id'])) {echo $_GET['id'];}
else{echo "DATA HOME"
    ;}
}

function pt_dc(){
    if (isset($_GET['id']))
    {
        echo file_get_contents("data/".$_GET['id'])
    ;}
    
    else 
    {
        echo 'click right to add your codes and datas'
        ;}
    
}

function pt_lt(){ $sex = scandir('./data');
    $i=2;
    while($i<count($sex)) {
        echo "<li><a href=\"index.php?id=$sex[$i]\">$sex[$i]</a></li>\n";
        $i=$i+1;
    ;}
}
?>




<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title> 
            <?php
            pt_tt()
            ?>
         </title>

    </head>
    <body>
        <center> <a href="index.php"><h1> AGORA DATASTORAGE </h1></a></center>
        
        <ul>
             <?php
             pt_lt()
             ?>
        </ul>
        <center><a href="create.php">Write</a>

        <h2> <?php
            pt_tt()
            ?> 
        </h2>
        <?php 
        pt_dc()
        ?>
        </center>
        
        

    
    </body>
</html>