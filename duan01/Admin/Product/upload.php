<?php
// Kết nối đến cơ sở dữ liệu
$pdo = new PDO("mysql:host=localhost;dbname=duan1", "root", "");

if (isset($_POST['submit'])) {
    $ProductName = $_POST['ProductName'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $OldPrice = $_POST['OldPrice'];
    $ProductStatus = $_POST['ProductStatus'];
    $CategoryID = $_POST['CategoryID'];

    $uploadDirectory = "View/Img/";

    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true);
    }

    if ($_FILES['ProductImage']['size'] > 0) {
        $mainImageName = $_FILES['ProductImage']['name'];
        $mainImageTmpName = $_FILES['ProductImage']['tmp_name'];
        $mainImagePath = $uploadDirectory . $mainImageName;
        move_uploaded_file($mainImageTmpName, $mainImagePath);
    } else {
        $mainImagePath = null;
    }

    $stmt = $pdo->prepare("INSERT INTO products (ProductName, Description, ProductImage, Price, OldPrice, ProductStatus, CategoryID) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$ProductName, $Description, $mainImagePath, $Price, $OldPrice, $ProductStatus, $CategoryID]);

    $productId = $pdo->lastInsertId();
    $images = $_FILES['images'];

    for ($i = 0; $i < count($images['name']); $i++) {
        $imageName = $images['name'][$i];
        $imageTmpName = $images['tmp_name'][$i];
        $imagePath = $uploadDirectory . $imageName;
        move_uploaded_file($imageTmpName, $imagePath);

        $stmt = $pdo->prepare("INSERT INTO img_products (ProductID, image_path) VALUES (?, ?)");
        $stmt->execute([$productId, $imagePath]);
    }
    header('location: index.php?act=Product');
}
