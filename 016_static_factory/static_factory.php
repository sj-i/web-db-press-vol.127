<?php

class HasStaticFactory {
    public function __construct(
        public int $i,
        public string $s,
    ) {
    }

    // staticファクトリメソッド
    public static function createWithDefault(
        int $i = 42,
        string $s = 'default',
    ): self {
        return new self($i, $s);
    }
}
$object = HasStaticFactory::createWithDefault();
$object = HasStaticFactory::createWithDefault(i: 1);
