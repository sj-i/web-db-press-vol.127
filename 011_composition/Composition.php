<?php

class Composition {
    private Dependency1 $dependency_1;
    private Dependency2 $dependency_2;

    public function __construct() {
        $this->dependency_1 = new Dependency1();
        $this->dependency_2 = new Dependency2();
    }

    public function doSomething(): void {
        $this->dependency_1->foo(
            $this->dependency_2->bar()
        );
    }
}
