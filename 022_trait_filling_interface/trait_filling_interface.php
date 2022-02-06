<?php

interface Dumpable {
    public function dump(): void;
}
/** @psalm-require-implements Dumpable */
trait DumpableDefaultInmpementation {
    public function dump(): void {
        var_dump($this);
    }
}

class DumpableClass implements Dumpable {
    use DumpableDefaultInmpementation;
}
(new DumpableClass())->dump();