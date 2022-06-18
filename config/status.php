<?php

return [
    'type' => [
        1 => 'admin',
        2 => 'vendor',
        3 => 'customer'
    ],
    'payment_method' => [
        1 => 'manual-tf',
        2 => 'midtrans',
        2 => 'offline'
    ],
    'discount' => [
        1 => 'precentage',
        2 => 'value'
    ],
    'balance' => [
        0 => 'Pending',
        1 => 'Success',
        99 => 'Reject',
        999 => 'Failed'
    ],
    'group' => [
        0 => 'Non Active',
        1 => 'Active',
    ],
    'session' => [
        0 => 'Non Active',
        1 => 'Active',
    ],
    'message' => [
        -10 => 'PENDING',
        -7 => 'MD_DOWNGRADE',
        -6 => 'INACTIVE',
        -5 => 'CONTENT_UNUPLOADABLE',
        -4 => 'CONTENT_TOO_BIG',
        -3 => 'CONTENT_GONE',
        -2 => 'EXPIRED',
        -1 => 'FAILED',
        0 => 'CLOCK',
        1 => 'SENT',
        2 => 'RECEIVED',
        3 => 'READ',
        4 => 'PLAYED'
    ],
    'message_max' => env('MESSAGE_MAX', 300),

];
