<?php
$senhacriptografada = '123456';

$ciphering = "aes-256-cbc-hmac-sha256";

$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;

// Non-NULL Initialization Vector for encryption
$encryption_iv = '1234567891011121';
  
// Store the encryption key
$encryption_key = "TesteCripto";

// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($senhacriptografada, $ciphering, $encryption_key, $options, $encryption_iv);
  
// Display the encrypted string
echo "Senha criptografada: " . $encryption . "\n";
  
$encryption_iv = '1234567891011121';

$decryption_iv = '1234567891011121';

$decryption_key = "TesteCripto";

$encryption = openssl_encrypt($senhacriptografada, $ciphering, $encryption_key, $options, $encryption_iv);

$decryption=openssl_decrypt ($encryption, $ciphering, $decryption_key, $options, $decryption_iv);

echo "Senha descriptografada: " . $decryption;
?>