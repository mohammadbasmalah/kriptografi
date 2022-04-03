<?php
$plaintext="Mohammad Basmalah";
$key="123456789";
echo "<h3>Contoh Penerapan Hashing</h3>";
echo "Plaintext= $plaintext<br>";
echo "Key= $key<hr>";
echo "default md5 =".md5($plaintext)."</br>";
echo "md2 =".hash_hmac('md2', $plaintext, $key)."</br>";
echo "md4 =".hash_hmac('md4', $plaintext, $key)."</br>";
echo "md5 =".hash_hmac('md5', $plaintext, $key)."</br>";
echo "sha1 =".hash_hmac('sha1', $plaintext, $key)."</br>";
echo "sha224 =".hash_hmac('sha224', $plaintext, $key)."</br>";
echo "sha256 =".hash_hmac('sha256', $plaintext, $key)."</br>";
echo "sha512 =".hash_hmac('sha512', $plaintext, $key)."</br>";
echo "sha3-512 =".hash_hmac('sha3-512', $plaintext, $key)."</br>";
echo "ripemd128 =".hash_hmac('ripemd128', $plaintext, $key)."</br>";
echo "whirlpool =".hash_hmac('whirlpool', $plaintext, $key)."</br>";
echo "tiger128,3 =".hash_hmac('tiger128,3', $plaintext, $key)."</br>";
echo "snefru =".hash_hmac('snefru', $plaintext, $key)."</br>";
echo "gost =".hash_hmac('gost', $plaintext, $key)."</br>";
echo "gost-crypto =".hash_hmac('gost-crypto', $plaintext, $key)."</br>";
echo "haval128,4 =".hash_hmac('haval128,4', $plaintext, $key)."</br>";
echo "haval256,5 =".hash_hmac('haval256,5', $plaintext, $key)."</br>";
?>
