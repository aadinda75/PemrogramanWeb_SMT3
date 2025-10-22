<?php
if (isset($_FILES['file'])) {
    $errors = array();

    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp  = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    $temp = explode('.', $file_name);
    $file_ext = strtolower(end($temp));

    $extensions = array("jpg", "jpeg", "png", "gif");

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Ekstensi file yang diizinkan hanya JPG, JPEG, PNG, atau GIF.";
    }

    if ($file_size > 2 * 1024 * 1024) {
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
    }

    if (empty($errors)) {
        $upload_dir = "uploads/";

        // buat folder kalau belum ada
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true);
        }

        $upload_path = $upload_dir . basename($file_name);

        // proses upload
        if (move_uploaded_file($file_tmp, $upload_path)) {
            echo "File berhasil diunggah.";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo implode(", ", $errors);
    }
}
?>
