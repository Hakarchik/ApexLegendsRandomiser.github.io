<?php
require_once "db.php";

if (!empty($_POST['name']) && !empty($_FILES['filename']) && !empty($_POST['classwp'])&& !empty($_POST['ammotype']))
{
    if ($_FILES && $_FILES["filename"]["error"]== UPLOAD_ERR_OK)
    {
        $name = "img/" .$_FILES["filename"]["name"];
        move_uploaded_file($_FILES["filename"]["tmp_name"], $name);
        $stmt = $pdo->prepare("insert into weapons(name, classwp, redtype, ammotype, img) values(?,?,?,?,?)");
        $stmt->execute([
        $_POST['name'],
        $_POST['classwp'],
        $_POST['red'],
        $_POST['ammotype'],
        "./".$name
    ]);

    header("Location: ./update/update.php");
    }
}
header("Location: ./update/update.php");
?>
