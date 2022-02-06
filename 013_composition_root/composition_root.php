<?php

$application = new Application(
    new B(),
    new C(
        new D(
            new E(
                new F(),
                new G(),
            ),
            new H()
        ),
    ),
);
