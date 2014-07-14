<?php

return [

    'main' => '%NAMESPACE_ESC%\\%CLASSNAME%',

    'autoload' => [

        '%NAMESPACE_ESC%\\' => 'src'

    ],

    'resources' => [

        'export' => [
            'view' => 'views'
        ]

    ],

    'controllers' => 'src/Controller/*Controller.php',

    'settings' => [

        'system' => '%NAME%/admin/settings.razr'

    ]

];
