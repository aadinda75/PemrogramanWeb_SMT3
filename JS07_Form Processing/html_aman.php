<!DOCTYPE html>
<html>
<head>
    <title>Validasi Input dan Email Aman</title>
</head>
<body>
    <h2>Form Input Aman dengan Validasi Email</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"novalidate>
        <label for="input">Masukkan Nama:</label>
        <input type="text" name="input" id="input" required><br><br>

        <label for="email">Masukkan Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <input type="submit" value="Kirim">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Amankan input dari XSS
        $input = htmlspecialchars($_POST['input'], ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');


        // Memeriksa apakah input adalah email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "<h3>Hasil Input</h3>";
            echo "<p>Nama: $input</p>";
            echo "<p>Email: $email</p>";
            
        } else {
            // Tangani input yang tidak valid
            echo "<p>Email tidak valid, silakan periksa kembali!</p>";
        }
    }
    ?>
</body>
</html>
