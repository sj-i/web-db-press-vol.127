<?php

class Injected {
    public function __construct(
        private Dependency1 $dependency_1,
        private Dependency2 $dependency_2,
    ) {
    }
}
