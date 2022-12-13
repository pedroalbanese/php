<?php
$block=mcrypt_get_block_size('rijndael-128', 'cbc');

$key='abcdefghijuklmno';
$iv='0000000000000000';
$str='hello world!';

//zero to PKCS7 padding
$pad=$block-(strlen($str)%$block);
$str.=str_repeat(chr($pad), $pad);

$s=mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $str,  MCRYPT_MODE_CBC, $iv);

echo 'Encrypted: '.base64_encode($s);
?>