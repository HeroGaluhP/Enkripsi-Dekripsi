<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Enkripsi dan Dekripsi Pesan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 5px;
        }

        .form-group button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .result label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .result textarea {
            width: 100%;
            height: 100px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Aplikasi Enkripsi dan Dekripsi Pesan</h1>

        <form method="post" action="">
            <div class="form-group">
                <label for="message">Pesan:</label>
                <input type="text" name="message" id="message" required>
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