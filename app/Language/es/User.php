<?php

return [
    'email' => [
        'is_unique' => 'Ese correo electrónico ya está registrado'
    ],
    'password_confirmation' => [
        'required' => 'Por favor, repite la contraseña',
        'matches' => 'Por favor, mete la misma contraseña de nuevo'
    ]
];