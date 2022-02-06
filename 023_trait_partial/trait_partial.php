<?php

trait ManuallyCrafted {
    // 人力でメンテナンスしたいプロパティやメソッドの定義
}

// 自動生成コード
class MachineGenerated
{
    use ManuallyCrafted;

    public function __construct(
        public int $i,
        public string $s,
    ) {
    }
}
