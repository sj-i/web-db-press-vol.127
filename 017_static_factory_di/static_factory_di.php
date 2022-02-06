<?php

// リファクタ前、DependencyをDIできない
class OldClass {
    public function doSomething(): void {
        (new Dependency())->doSomething();
    }
}
(new OldClass())->doSomething();

// リファクタ後
class Refactored {
    // DependencyをDIできる
    public function __construct(
    private Dependency $dependency
    ) {
    }

    // もともとnewしていた箇所で呼び出せる
    public static function createDefault(): self
    {
        return new self(
            new Dependency()
        );
    }

    public function doSomething(): void {
        $this->dependency->doSomething();
    }
}
Refactored::createDefault()->doSomething();
