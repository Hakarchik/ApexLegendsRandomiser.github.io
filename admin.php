<?php

require_once "db.php";

$wp= "SELECT * FROM weapons ";
$reswp = $pdo->query($wp);
$leg= "SELECT * FROM legends ";
$resleg = $pdo->query($leg);
$a = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./admin_css.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <video autoplay muted loop id="myVideo" class="myVideo" src="./img/Apex Legends Wallpaper Engine.mp4"></video>
    <title>Document</title>
</head>
<body>
    <div class="add" id="add">
    <form action="addLeg.php" method="post" enctype="multipart/form-data">
<input required name="name" type="text" placeholder="Name legend">
<input type="file" name="filename" size="10" />
<select name="classlg">
            <option >Legends class</option>
            <option value="1">recon</option>
            <option value="2">support</option>
            <option value="3">controller</option>
            <option value="4">assault</option>
            <option value="5">skirmisher</option>
            </option></select>
<input type="submit" value="Добавить" />
</form>

    <form action="addWp.php" method="post" enctype="multipart/form-data">
<input required name="name" type="text" placeholder="Name weapon">
<input type="file" name="filename" size="10"/>

            <select name="classwp">
            <option >Weapon class</option>
            <option value="1">AR</option>
            <option value="2">SMG</option>
            <option value="3">LMG</option>
            <option value="4">marksman</option>
            <option value="5">sniper1</option>
            <option value="6">shotgun1</option>
            <option value="7">pistols</option>
            </option></select>
            <select name="ammotype">
            <option >Ammo type</option>
            <option value="1">light</option>
            <option value="2">heavy</option>
            <option value="3">shotgun</option>
            <option value="4">energy</option>
            <option value="5">sniper</option>
            <option value="6">arrows</option>
            </option></select>
            <select name="red">
            <option value="0" selected>no</option>
            <option value="1">yes</option>
            </option></select>
<input type="submit" value="Добавить" />
</form>

    </div>
    

        <?php
    echo '<class name="weapons">';
    echo '<table>';
    foreach($reswp as $class)
    {
        if($class["id"]%5 == 0)
        {
            echo '<tr>';
            echo '<td>'.'<h3>'.$class["name"].'</h3> <img width=150  src="'.$class["img"] .'" alt="">'.'<form action="delete.php" method="post"> <input type="hidden" id = "1" name = "id" value="'.$class["id"]  .'" /> <input type="submit" value="✖" /> </form> <form action="update.php" method="post"> <select name="classwp">
            <option >Weapon class</option>
            <option value="1">AR</option>
            <option value="2">SMG</option>
            <option value="3">LMG</option>
            <option value="4">marksman</option>
            <option value="5">sniper1</option>
            <option value="6">shotgun1</option>
            <option value="7">pistols</option>
            </option></select>
            <select name="ammotype">
            <option >Ammo type</option>
            <option value="1">light</option>
            <option value="2">heavy</option>
            <option value="3">shotgun</option>
            <option value="4">energy</option>
            <option value="5">sniper</option>
            <option value="6">arrows</option>
            </option></select>
            <select name="red">
            <option value="0" selected>no</option>
            <option value="1">yes</option>
            </option></select><input type="hidden" id = "1" name = "id" value="'.$class["id"]  .'" /> <input type="submit" value="Обновить" /> </form>'.'</td>';

        }
        else
        {
            echo '<td>'.'<h3>'.$class["name"].'</h3> <img width=150  src="'.$class["img"] .'" alt="">'.'<form action="delete.php" method="post"> <input type="hidden" id = "1" name = "id" value="'.$class["id"]  .'" /> <input type="submit" value="✖" /> </form> <form action="update.php" method="post"> <select name="classwp">
            <option >Weapon class</option>
            <option value="1">AR</option>
            <option value="2">SMG</option>
            <option value="3">LMG</option>
            <option value="4">marksman</option>
            <option value="5">sniper1</option>
            <option value="6">shotgun1</option>
            <option value="7">pistols</option>
            </option></select>
            <select name="ammotype">
            <option >Ammo type</option>
            <option value="1">light</option>
            <option value="2">heavy</option>
            <option value="3">shotgun</option>
            <option value="4">energy</option>
            <option value="5">sniper</option>
            <option value="6">arrows</option>
            </option></select>
            <select name="red">
            <option value="0" selected>no</option>
            <option value="1">yes</option>
            </option></select><input type="hidden" id = "1" name = "id" value="'.$class["id"]  .'" /> <input type="submit" value="Обновить" /> </form>'.'</td>';
            
        }
        
        
    }
    
    echo '</table>';
    echo '</class>';
    echo '<class name="legends">';
    echo '<table>';
    echo '<tr>';
    foreach($resleg as $class)
    {
        if($class["id"]%4 == 0)
        {
            echo '<tr>';
            echo '<td>'.'<h3>'.$class["name"].'</h3> <img width=150 src="'.$class["img"] .'" alt="">'.'<form action="delete.php" method="post"> <input type="hidden" id = "2" name = "ids" value="'.$class["id"]  .'" /> <input type="submit" value="✖" /> </form> <form action="update.php" method="post"> <select name="classlg">
            <option >Legends class</option>
            <option value="1">recon</option>
            <option value="2">support</option>
            <option value="3">controller</option>
            <option value="4">assault</option>
            <option value="5">skirmisher</option>
            </option></select> <input type="hidden" id = "2" name = "ids" value="'.$class["id"]  .'" /> <input type="submit" value="Обновить" /> </form>'.'</td>';
        }
        else
        {
            echo '<td>'.'<h3>'.$class["name"].'</h3> <img width=150  src="'.$class["img"] .'" alt="">'.'<form action="delete.php" method="post"> <input type="hidden" id = "2" name = "ids" value="'.$class["id"]  .'" /> <input type="submit" value="✖" /> </form> <form action="update.php" method="post"> <select name="classlg">
            <option >Legends class</option>
            <option value="1">recon</option>
            <option value="2">support</option>
            <option value="3">controller</option>
            <option value="4">assault</option>
            <option value="5">skirmisher</option>
            </option></select> <input type="hidden" id = "2" name = "ids" value="'.$class["id"]  .'" /> <input type="submit" value="Обновить" /> </form>'.'</td>';
        }

    }
    echo '</tr>';
    echo '</table>';
    echo '</class>';
    ?>
</body>
</html>