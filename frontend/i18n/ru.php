<?php
/*-------------------------------------------------------
*
*   Project name: LSP-GoStream
*   Official site: goweb.pro
*   Contact e-mail: gowebpro@ya.ru
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/


return [
    'config_sections' => [
        'main' => [
            'name' => 'Основные настройки',
            'description' => ''
        ]
    ],
    'config' => [
        'main' => [
            'block_count' => [
                'name' => 'Количество выводимых записей в блоке',
                'description' => 'от 1 до 50'
            ],
            'block_avatar' => [
                'name' => 'Показывать или нет аватары в блоке',
                'description' => 'Пока не работает'
            ],
        ],
    ],

    'block' => [
        'title' => 'Прямой эфир',
        'events_all' => 'Весь эфир',
        'title_all' => 'Все',
        'title_my' => 'Я слежу',
        'no_events' => 'Событий нет',
    ],

];
