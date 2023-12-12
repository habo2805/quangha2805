<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Sản phẩm</title>
</head>

<body>
    <form class="wrapper__form" action="index.php?act=upload" method="post" enctype="multipart/form-data">
        <div class="form__group">
            <div class="form__label">
                <label>
                    Tên sản phẩm
                </label>
                <div class="form__input">
                    <input type="text" name="ProductName">
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__label">
                <label>
                    Mô tả
                </label>
                <div class="form__input">
                    <input type="text" name="Description" value="<?php if (isset($Description) && ($Description != "")) echo $Description ?>">
                    <span style="color:red">
                        <?= $errors['Description'] ?? '' ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__label">
                <label>
                    Gía
                </label>
                <div class="form__input">
                    <input type="number" name="Price" value="<?php if (isset($Price) && ($Price != "")) echo $Price ?>">
                    <span style="color:red">
                        <?= $errors['Price'] ?? '' ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__label">
                <label>
                    Gía cũ
                </label>
                <div class="form__input">
                    <input type="number" name="OldPrice" value="<?php if (isset($OldPrice) && ($OldPrice != "")) echo $OldPrice ?>">
                    <span style="color:red">
                        <?= $errors['OldPrice'] ?? '' ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__label">
                <label>
                    Trạng thái
                </label>
                <div class="form__input">
                    <input type="text" name="ProductStatus" value="<?php if (isset($ProductStatus) && ($ProductStatus != "")) echo $ProductStatus ?>">
                    <span style="color:red">
                        <?= $errors['ProductStatus'] ?? '' ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__label">
                <label>
                    Danh mục
                </label>
                <div class="form__input">
                    <select name="CategoryID" style="padding: 10px 20px 10px 3px; border-radius: 3px; border: 1px solid #ccc; outline: none; width: 100%;">
                        <?php
                        foreach ($listCategory as $category) {
                            extract($category);
                            echo '<option value="' . $CategoryID . '">' . $CategoryName . '</option>';
                        }
                        ?>
                    </select>
                    <span style="color:red">
                        <?= $errors['CategoryID'] ?? '' ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__label">
                <label>
                    Ảnh
                </label>
                <div class="form__input">
                    <input type="file" name="ProductImage" accept="image/*">
                    <span style="color:red">
                        <?= $errors['ProductImage'] ?? '' ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="form__label">
                <label>
                    Ảnh phụ
                </label>
                <div class="form__input">
                    <input type="file" name="images[]" multiple accept="image/*">
                    <span style="color:red">
                        <?= $errors['ProductImage'] ?? '' ?>
                    </span>
                </div>
            </div>
        </div>

        <div class="btn_btn" style="text-align: center;
    margin-top: 30px;">
            <button style="    padding: 13px 15px;
    background-color: green;
    border: none;
    color: #fff;
    border-radius: 5px;" type="submit" name="submit">Thêm </button>
        </div>
    </form>
</body>

</html>