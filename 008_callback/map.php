<?php

function map(
    iterable $collection,
    callable $do_something
): iterable {
    $result = [];
    foreach ($collection as $key => $item) {
        $result[$key] = $do_something($item);
    }
    return $result;
}
map([1, 2, 3], function ($item) {
    var_dump($item);
    return $item;
});
