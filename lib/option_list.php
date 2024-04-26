<?php
$optionList = [
    'MAIN' =>[
        'TITLE' => 'Основные',
        'ITEMS' =>[
            [
                'NAME' => 'Название сайта',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'site_name'
            ],
            [
                'NAME' => 'Брендовый цвет',
                'TYPE' => 'color',
                'DESCRIPTION' => '',
                'OPTION' => 'color'
            ]
        ]
    ],
    'CONTACTS' =>[
        'TITLE' => 'Контактные данные',
        'ITEMS' =>[
            [
                'NAME' => 'Телефон',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => 'Номер телефона для отображения на сайте',
                'OPTION' => 'phone'
            ],
            [
                'NAME' => 'Почта',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => 'Почта для отображения на сайте',
                'OPTION' => 'email'
            ],
            [
                'NAME' => 'Адрес',
                'TYPE' => 'string',
                'WIDTH' => '70',
                'DESCRIPTION' => 'Адрес для отображения на сайте',
                'OPTION' => 'address'
            ],
            [
                'NAME' => 'Координаты на карте',
                'TYPE' => 'html',
                'DESCRIPTION' => '',
                'OPTION' => 'map'
            ],
            [
                'NAME' => 'График работы',
                'TYPE' => 'string',
                'WIDTH' => '50',
                'DESCRIPTION' => '',
                'OPTION' => 'worktime'
            ],
            [
                'NAME' => 'Ссылки на соц. сети',
                'IS_HEADING' => true
            ],
            [
                'NAME' => 'VK',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'vk'
            ],
            [
                'NAME' => 'Telegram',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'telegram'
            ],
            [
                'NAME' => 'YouTube',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'youtube'
            ],
            [
                'NAME' => 'Яндекс Дзен',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'yandex_dzen'
            ],
        ]
    ],
    'MAIL' =>[
        'TITLE' => 'Настройки почтовых шаблонов',
        'ITEMS' =>[
            [
                'NAME' => 'Логотип',
                'TYPE' => 'file',
                'DESCRIPTION' => '',
                'OPTION' => 'mail_logo'
            ],
            [
                'NAME' => 'Основной цвет',
                'TYPE' => 'color',
                'WIDTH' => '20',
                'DESCRIPTION' => 'Цвет, который будет использоваться в почтовом шаблоне',
                'OPTION' => 'mail_color'
            ],
            [
                'NAME' => 'HTML шаблон для списка продуктов в письме (#ORDER_LIST#)',
                'TYPE' => 'html',
                'DESCRIPTION' => 'В почтовом шаблоне этот параметр обозначен как #ORDER_LIST#. Логика вычисления реализована в DiHouseOrderStatusMails.php',
                'OPTION' => 'mail_template',
                'ROWS' => '40'
            ]
        ]
    ],
    'ORDERS' =>[
        'TITLE' => 'Заказы',
        'ITEMS' =>[
            [
                'NAME' => 'Почта для приема заявок',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => 'На данную почту отправляются письма при заявках, заказах и вопросах о заказе',
                'OPTION' => 'email_order'
            ],
            [
                'NAME' => 'Почта для поддержки',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'email_order'
            ],
            [
                'NAME' => 'Почта отправителя при смене статусов заказа',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'email_change_status'
            ],
            [
                'NAME' => 'Префикс номера заказа',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'prefix'
            ]
        ]
    ],
    'CATALOG' =>[
        'TITLE' => 'Каталог',
        'ITEMS' =>[
            [
                'NAME' => 'Настройки торгового каталога',
                'IS_HEADING' => true
            ],
            [
                'NAME' => 'Код зачеркнутой цены',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'price_code'
            ],
            [
                'NAME' => 'Скрывать товары без картинок',
                'TYPE' => 'bool',
                'DESCRIPTION' => '',
                'OPTION' => 'hide_nopicture_goods'
            ],
            [
                'NAME' => 'Скрывать товры без цен',
                'TYPE' => 'bool',
                'DESCRIPTION' => '',
                'OPTION' => 'hide_noprice_goods'
            ],
            [
                'NAME' => 'Скрывать товары без остатков',
                'TYPE' => 'bool',
                'DESCRIPTION' => '',
                'OPTION' => 'hide_noquantity_goods'
            ],
            [
                'NAME' => 'Настройки Корзины',
                'IS_HEADING' => true
            ],
            [
                'NAME' => 'Склад списания',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => 'Купленные товары будут списываться с этого склада и информация о нем будет передаваться в 1С (Необходимо указать GUID)',
                'OPTION' => 'warehouse'
            ],
            [
                'NAME' => 'Сообщение о доставке',
                'TYPE' => 'string',
                'WIDTH' => '40',
                'DESCRIPTION' => '',
                'OPTION' => 'info_delivery'
            ],
            [
                'NAME' => 'Сообщение о доступных способах оплаты',
                'TYPE' => 'string',
                'WIDTH' => '40',
                'DESCRIPTION' => '',
                'OPTION' => 'info_payment'
            ],
            [
                'NAME' => 'Сообщение для неавторизованных пользователей',
                'TYPE' => 'string',
                'WIDTH' => '40',
                'DESCRIPTION' => '',
                'OPTION' => 'info_nonauth'
            ]
        ]
    ],
    'INFO' =>[
        'TITLE' => 'Информационные сообщения на сайте',
        'ITEMS' =>[
            [
                'NAME' => 'Сообщение в шапке сайта',
                'TYPE' => 'html',
                'DESCRIPTION' => '',
                'OPTION' => 'upper_message',
                'ROWS' => '20'
            ]
        ]
    ],
    'FORMS' =>[
        'TITLE' => 'Формы обратной связи',
        'ITEMS' =>[
            [
                'NAME' => 'Адрес страницы возврата',
                'TYPE' => 'string',
                'WIDTH' => '20',
                'DESCRIPTION' => '',
                'OPTION' => 'refund_page'
            ]
        ]
    ]
];