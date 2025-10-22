<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi (AJAX)</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

    <h1>Form Input dengan Validasi (AJAX)</h1>

    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
    $(document).ready(function () {
        $("#myForm").submit(function (event) {
            event.preventDefault();

            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            // Validasi nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                $("#email-error").text("Format email tidak valid.");
                valid = false;
            } else {
                $("#email-error").text("");
            }

            // Validasi password 
            if (password === "") {
                $("#password-error").text("Password harus diisi.");
                valid = false;
            } else if (password.length < 8) {
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }

            // Jika valid, kirim data lewat AJAX
            if (valid) {
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: { nama: nama, email: email, password: password },
                    success: function (response) {
                        $("#hasil").html(response);
                    },
                });
            }
        });
    });
    </script>
</body>
</html>
