<?php
// loop.php の $i と衝突、無限ループになる
for ($i = 0; $i < 10; $i++) {
    echo $i;
}
