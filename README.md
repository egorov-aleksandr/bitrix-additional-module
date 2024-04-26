# Описание

Позволяет вынести различные константы для публичной части в административную часть (название сайта, контактные данные, логотипы и т.д.).

Поддерживает следующие типы свойств:

1. Строка
2. Цвет
3. Файл
4. Html-вёрстка
5. Флажок(да/нет)

Поддерживает многосайтовость: свойства устанавливаются отдельно для каждого сайта.

# Установка через Composer

Пример вашего composer.json с установкой модуля в local/modules/

```
{
  "extra": {
    "installer-paths": {
      "local/modules/{$name}/": ["type:bitrix-module"]
    }
  },
  "require": {
    "egorov2105/additional-options": "dev-main"
  },
}
```

Packagist: https://packagist.org/packages/egorov2105/additional.options

# Использование
После установки модуля в меню административной части добавляется новый пункт. Настройки могут быть сгруппированы по разделам. В рабочем окне расположен список сайтов и сами настройки.

Для добавления/изменения/удаления разделов и настроек, нужно отредактировать файл \local\modules\additional-options\lib\option_list.php
