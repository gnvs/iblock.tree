# iblock.list_sections
Простой компонент для вывода разделов

# Использование компонента
Копируем в /local/components/, свое пространство имен, в моем случае получается /local/components/gnvs/

# Вызов компонента на странице

```php
<?$APPLICATION->IncludeComponent(
	"gnvs:iblock.tree",
	"",
Array(),
false
);?>
```
и как всегда копируем его и выставляем параметры. 