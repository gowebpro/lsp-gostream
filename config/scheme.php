<?php
/*-------------------------------------------------------
*
*   Plugin name:    Crypto Password
*   Author:         Chiffa
*   Web:            http://goweb.pro
*
---------------------------------------------------------
*/


return [
    /*
     * Описание настроек плагина для интерфейса редактирования
     */
    '$config_scheme$' => [
        'block_count' => [
            'type'        => 'integer',
            'name'        => 'config.main.block_count.name',
            'description' => 'config.main.block_count.description',
            'validator'   => [
                'type'   => 'Number',
                'params' => [
                    'min'         => 1,
                    'max'         => 50,
                    'allowEmpty'  => false,
                ]
            ]
        ],
        'block_avatar' => [
            'type'        => 'boolean',
            'name'        => 'config.main.block_avatar.name',
            'description' => 'config.main.block_avatar.description'
        ],
    ],
    /**
     * Описание разделов для настроек
     * Каждый раздел группирует определенные параметры конфига
     */
    '$config_sections$' => [
        [
            'name'         => 'config_sections.main.name',
            'description'  => 'config_sections.main.description',
            'allowed_keys' => [
                'block_count',
                'block_avatar'
            ]
        ]
    ]
];
