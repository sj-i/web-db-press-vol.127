<?php

/** @immutable */
class Employee {
    public function __construct(
        public int $id,
        public string $family_name,
        public string $name,
    ) {
    }

    public function getFullName(): string {
        return join(
            ' ',
            [$this->family_name, $this->name],
        );
    }
}

$employee = new Employee(1, 'infinite', 'loop');
echo $employee->getFullName();
