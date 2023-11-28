<?php
function generateKey($plaintextLength) {
    $key = "";
    for ($i = 0; $i < $plaintextLength; $i++) {
        $key .= chr(rand(65, 90)); // Menggunakan huruf kapital ASCII sebagai kunci
    }
    return $key;
}

function encrypt($plaintext, $key) {
    $ciphertext = "";
    $plaintextLength = strlen($plaintext);
    for ($i = 0; $i < $plaintextLength; $i++) {
        $ciphertext .= chr(((ord($plaintext[$i]) - 65 + ord($key[$i]) - 65) % 26) + 65);
    }
    return $ciphertext;
}

function decrypt($ciphertext, $key) {
    $decryptedText = "";
    $ciphertextLength = strlen($ciphertext);
    for ($i = 0; $i < $ciphertextLength; $i++) {
        $decryptedText .= chr(((ord($ciphertext[$i]) - ord($key[$i]) + 26) % 26) + 65);
    }
    return $decryptedText;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plaintext = strtoupper($_POST["plaintext"]); // Konversi ke huruf kapital
    $key = strtoupper($_POST["key"]); // Konversi ke huruf kapital

    if (strlen($key) != strlen($plaintext)) {
        echo "Panjang kunci harus sama dengan panjang plaintext.";
        exit();
    }

    $ciphertext = encrypt($plaintext, $key);
    echo "Hasil enkripsi: $ciphertext<br>";

    $decryptedText = decrypt($ciphertext, $key);
    echo "Hasil dekripsi: $decryptedText";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Time Pad Encryption</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="plaintext">Plaintext:</label>
        <input type="text" name="plaintext" required><br>

        <label for="key">Kunci:</label>
        <input type="text" name="key" required><br>

        <input type="submit" value="Enkripsi & Dekripsi">
    </form>
</body>
</html>
