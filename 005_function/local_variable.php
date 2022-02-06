<?php
function f1() {
    $var = 3;
    echo $var;
}
function f2() {
    $var = 42;
    f1(); // 3と出力
    include 'echo_var.php'; // 42と出力
}
