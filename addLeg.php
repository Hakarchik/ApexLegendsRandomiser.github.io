<?php
require_once "db.php";
if (!empty($_POST['name']) && !empty($_FILES['filename']) && !empty($_POST['classlg']))
{
    if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
    {
        $name = "img/" .$_FILES["filename"]["name"];
        move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
        $stmt = $pdo->prepare("insert into legends(name, class, img) values(?,?,?)");
    $stmt->execute([
        $_POST['name'],
        $_POST['classlg'],
        "./".$name
    ]);

    header("Location: ./update/update.php");
    }
}