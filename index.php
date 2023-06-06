<html>

<head>
    <title>Aplikasi Enkripsi dan Dekripsi Pesan</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <div class="container">
        <h1>Aplikasi Enkripsi dan Dekripsi Pesan</h1>

        <form method="post" action="">
            <div class="wave-group">
                <input required="" type="text" class="input" name="message">
                <span class="bar"></span>
                <label class="label">
                    <span class="label-char" style="--index: 0">P</span>
                    <span class="label-char" style="--index: 1">e</span>
                    <span class="label-char" style="--index: 2">s</span>
                    <span class="label-char" style="--index: 3">a</span>
                    <span class="label-char" style="--index: 4">n</span>
                </label>
            </div>

            <div class="form-group">
                <button type="submit" name="encrypt">Enkripsi</button>
                <button type="submit" name="decrypt">Dekripsi</button>
            </div>
        </form>

        <?php
        // Fungsi untuk mengenkripsi pesan menggunakan metode AES
        function encryptMessage($message, $key)
        {
            $cipher = "aes-256-cbc";
            $ivLength = openssl_cipher_iv_length($cipher);
            $iv = openssl_random_pseudo_bytes($ivLength);

            $encrypted = openssl_encrypt($message, $cipher, $key, OPENSSL_RAW_DATA, $iv);

            return base64_encode($iv . $encrypted);
        }

        // Fungsi untuk mendekripsi pesan yang telah dienkripsi menggunakan metode AES
        function decryptMessage($encryptedMessage, $key)
        {
            $cipher = "aes-256-cbc";
            $ivLength = openssl_cipher_iv_length($cipher);

            $data = base64_decode($encryptedMessage);
            $iv = substr($data, 0, $ivLength);
            $encrypted = substr($data, $ivLength);

            $decrypted = openssl_decrypt($encrypted, $cipher, $key, OPENSSL_RAW_DATA, $iv);

            return $decrypted;
        }

        // Memeriksa tindakan yang diambil pengguna (enkripsi atau dekripsi)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $message = $_POST['message'];
            $key = 'kunci-rahasia'; // Ganti dengan kunci rahasia yang lebih kuat dalam penggunaan sebenarnya

            if (isset($_POST['encrypt'])) {
                $encryptedMessage = encryptMessage($message, $key);

                echo '<div class="result">';
                echo '<label>Hasil Enkripsi:</label>';
                echo '<textarea readonly>' . $encryptedMessage . '</textarea>';
                echo '</div>';
            } elseif (isset($_POST['decrypt'])) {
                $decryptedMessage = decryptMessage($message, $key);

                echo '<div class="result">';
                echo '<label>Hasil Dekripsi:</label>';
                echo '<textarea readonly>' . $decryptedMessage . '</textarea>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>

</html>