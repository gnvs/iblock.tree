<?php
/* /local/components/gnvs/iblock.tree/.description.php */
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
    'NAME' => 'Структура разделов', // название компонента
    'DESCRIPTION' => 'Выводит дерево разделов инфоблока',
    'ICON' => '/images/icon.gif', // иконка компонента относительно папки компонента
    'CACHE_PATH' => 'Y', // показывать кнопку очистки кеша
    'SORT' => 50, // порядок сортировки в визуальном редакторе
    'COMPLEX' => 'N', // признак комплексного компонента
    'PATH' => array( // расположение компонента в визуальном редакторе
        'ID' => 'other_components', // идентификатор верхнего уровеня в редакторе
        'NAME' => 'Прочие компоненты', // название верхнего уровня в редакторе
        'CHILD' => array( // второй уровень в визуальном редакторе
            'ID' => 'other_iblock', // идентификатор второго уровня в редакторе
            'NAME' => 'Информационный блок' // название второго уровня в редакторе
        )
    )
);