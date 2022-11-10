<?php
include('../Model/database.php');
if (isset($_POST["add"])) {
    $cate_id = $_POST["cate-id"];
    $name = $_POST["cource-name"];
    $desc = $_POST["desc"];
    $result = $_POST["result"];
    $fee = $_POST["fee"];
    $count = $_POST["lesson-count"];
    $total_time = $_POST["total-time"];
    $access = $_POST["access"];
    $content = $_POST["content"];
    $video = $_POST["video"];
    $level = $_POST["level"];
    $link_video = $_POST["link-video"];

    $target_dir = "../Assets/Imgs/cources/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["img"]["tmp_name"]);
    if ($check === false) {
        echo "Hình ảnh sai định dạng!";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Đã tòn tại hình ảnh này";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["img"]["size"] > 500000) {
        echo "Hình ảnh kích thước quá lớn";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Định dạng hình ảnh không hỗ trợ.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Upload ảnh không thanh công";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "Hình ảnh " . htmlspecialchars(basename($_FILES["img"]["name"])) . "upload thành công.";
        } else {
            echo "Có lỗi xảy ra vui lòng thử lại";
        }
    }

    $img = $_FILES["img"]["name"];
    $cource_id = rand(10, 10000000);
    $sql = "INSERT INTO cources(id, cate_id, cource_name, img, description, result, fee, lession_count, total_time, access, content, video, level, link_video) VALUES($cource_id, $cate_id, '$name', '$img', '$desc', '$result', '$fee', $count, '$total_time', '$access', '$content', '$video', '$level', '$link_video')";
    echo $sql;
    try {
        $db->exec($sql);
        header("Location:viewcource.php");
    } catch(PDOException $e) {
        echo $e;
    }
}
