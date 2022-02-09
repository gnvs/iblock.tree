<?php
/* /local/components/gnvs/iblock.tree/templates/.default/template.php */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$this->setFrameMode(true);
?>

<?php if (!empty($arResult)): ?>
    <ul>
    <?php $previousLevel = 0; ?>
    <?php foreach ($arResult as $arSection): ?>

    <?php if ($previousLevel && $arSection['DEPTH_LEVEL'] < $previousLevel): ?>
        <?= str_repeat('</ul></li>', ($previousLevel - $arSection['DEPTH_LEVEL'])); ?>
    <?php endif; ?>

    <?php if ($arSection['IS_PARENT']): /* если есть дочерние элементы */ ?>
    <?php if ($arSection['DEPTH_LEVEL'] == 1): /* корневой элемент */ ?>
    <li class="root parent">
    <a href="<?= $arSection['SECTION_PAGE_URL']; ?>"><?= $arSection['NAME']; ?></a>
    <ul>
    <?php else: /* элемент второго, третьего уровня */ ?>
    <li class="parent">
    <a href="<?= $arSection['SECTION_PAGE_URL']; ?>"><?= $arSection['NAME']; ?></a>
    <ul>
    <?php endif; ?>
    <?php else: /* если нет дочерних элементов */ ?>
        <?php if ($arSection['DEPTH_LEVEL'] == 1): /* корневой элемент */ ?>
            <li class="root">
                <a href="<?= $arSection['SECTION_PAGE_URL']; ?>"><?= $arSection['NAME']; ?></a>
            </li>
        <?php else: /* элемент второго, третьего уровня */ ?>
            <li>
                <a href="<?= $arSection['SECTION_PAGE_URL']; ?>"><?= $arSection['NAME']; ?></a>
            </li>
        <?php endif; ?>
    <?php endif; ?>

    <?php $previousLevel = $arSection['DEPTH_LEVEL']; ?>

<?php endforeach; ?>

    <?php if ($previousLevel > 1): ?>
        <?= str_repeat('</ul></li>', ($previousLevel-1)); ?>
    <?php endif; ?>
    </ul>
<?php endif; ?>