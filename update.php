<?php
require_once "db.php";


if(isset($_POST["id"]))
{
    $classwp = $_POST["classwp"]; 
    $red = $_POST["red"];
    $ammotype = $_POST["ammotype"];
    $id = $_POST["id"];
    $stmt = $pdo->prepare('UPDATE weapons set classwp = ?, redtype = ?, ammotype = ?  where id = ?');
    $stmt->execute([
        $classwp,
        $red,
        $ammotype,
        $id
        ]);
    header("Location: ./update/update.php");

}
else if(isset($_POST["ids"]))
{
    $classlg = $_POST["classlg"];
    $ids = $_POST["ids"];
    $stmt = $pdo->prepare('UPDATE legends set class = ? where id = ?');
    $stmt->execute([
        $classlg,
        $ids
        ]);
    header("Location: ./update/update.php");

}
?>
