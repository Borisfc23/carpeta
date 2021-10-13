<?php 
$password = '12345';

echo md5($password).'  con md5 <br/>';
echo sha1($password).' con sha1 <br/>';
$hash = password_hash($password,PASSWORD_DEFAULT,['cost'=>10]);
echo $hash.' con hash<br/>';
echo password_verify($password,$hash);//Para verificar con true(1) or false(0)
?>