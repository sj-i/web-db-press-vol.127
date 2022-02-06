<?php

// とにかく文字列を書き込める型
interface Writable {
    public function write(string $content);
}

// とにかく文字列を書き込める型の一つ
class Buffer implements Writable {
    public function __construct(
        private string $buffer,
    ) {
    }

    public function write(string $content) {
        $this->buffer = $content;
    }
}

// どのWritableを渡しても実装に応じ動作＝多態性
function writeTo(
    Writable $writable, string $content
): void {
    $writable->write($content);
}
