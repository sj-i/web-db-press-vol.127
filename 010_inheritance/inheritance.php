<?php

class ParentClass {
    public int $i = 42;

    public function f1(): void {}
    protected function f2(): void {}
    private function f3(): void {}
}

class ChildClass extends ParentClass {
    public function f4(): void {
        $this->f1(); // 親から引き継ぎ、呼べる
        $this->f2(); // 親から引き継ぎ、呼べる
        $this->f3(); // 呼べない
        echo $this->i; // 親から引き継ぎ、使える
    }
}

echo (new ChildClass())->i; // アクセスできる
(new ChildClass())->f1(); // アクセスできる
