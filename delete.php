<?php
require_once "db.php";


if(isset($_POST["id"]))
{
    $id = $_POST["id"];
    echo $id;
    $stmt = $pdo->prepare('delete from weapons where id = ?');
    $stmt->execute([$id]);
    header("Location: ./update/update.php");

}
if(isset($_POST["ids"]))
{
    $ids = $_POST["ids"];
    echo $ids;
    $stmt = $pdo->prepare('delete from legends where id = ?');
    $stmt->execute([$ids]);
    header("Location: ./update/update.php");

}
?>
