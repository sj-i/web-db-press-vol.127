<?php

trait ExampleTrait {
    public int $i = 42;
    public function f(): void {}
}

class TraitUser {
    use ExampleTrait;
}

$trait_user = new TraitUser();
$trait_user->f();
echo $trait_user->i;
