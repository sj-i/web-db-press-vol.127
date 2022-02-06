<?php

/** @psalm-immutable */
final class UserId {
    public function __construct(
        public readonly int $value
    ) {
    }

    public function equals(self $another): bool {
        return $this->value === $another->value;
    }
}
function takeAccount(AccountId $account_id): void {}
function (UserId $user_id): void {
    // 静的解析でこのような誤用を検知できる
    takeAccount($user_id);
};
