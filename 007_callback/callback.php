<?php

function sayHello(callable $output): void {
    $output('hello world');
}
// 画面にhello worldと出力
sayHello(fn (string $message) => print($message));

// ファイルにhello worldと出力
sayHello(
    fn (string $message) => file_put_contents(
        'path/to/file.txt',
        $message
    )
);
