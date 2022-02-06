<?php

interface AbstractDep {}

class HasAbstractDependency {
    public function __construct(
        // 完全自動ではautowiringできない
        private AbstractDep $abstract_dep,
    ) {
    }
}

// あらかじめコンテナに実装の登録が必要
$container->register(
    AbstractDependency::class,
    new class() implements AbstractDependency {}
);
