<?php

$hit_count = @file_get_contents('count_andr_wmg.txt');
$hit_count++;
@file_put_contents('count_andr_wmg.txt', $hit_count);

header('Location: https://www.dropbox.com/s/tqh2vlcolt28eqw/Warriors%20Memory%20Game%20elements.apk'); // redirect to the real file to be downloaded
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>