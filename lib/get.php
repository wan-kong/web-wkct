<?php
error_reporting(0);
$question = isset($_GET['question']) ? $_GET['question'] : null;
// get方法访问
// 加一层嵌套可以有效防止用户f12审查到真实地址
if ($question != null) {
    $json = file_get_contents('http://ct.mmifx.com/api.php?token=6e8a076eee8f2a279f574abaa884e7b90ae17ae6&question=' . $question);
    echo $json;
} else {
    echo '<h1>404 - Page Not Found </h1>';
}
