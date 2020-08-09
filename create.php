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
         <style>
         #title{height:20px; width:600px;}
         #c_t{height:500px;width:600px}
         #top{ border-color:cyan;length:30px}
        </style>

    </head>
    <body>
        <center> <a href="index.php" id="top"><h1> AGORA DATASTORAGE </h1></a> </center>
        
        <Center><a href="index.php">Write</a>
        <form action="w_p.php" method="post">
        <p>
            <input type="text" id="title" name="t_t" placeholder="Title">
        </p>
        <p>
            <textarea name="c_t" placeholder="What do you want to share?" id="c_t"></textarea> </p>
           <p> <input type="submit">
        </p>
        </form>
       </center>

    
        

    
    </body>
</html>