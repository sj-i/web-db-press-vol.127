<?php

// $containerをautowiring付きのDIコンテナとする
// Applicationのインスタンスを
// 依存関係も含めすべて構築し注入した状態で得る
$application = $container->get(Application::class);
