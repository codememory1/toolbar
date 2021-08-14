# Toolbar

![Toolbar Example](./Resources/images/toolbar.png)

# Установка

```
composer require codememory/toolbar
```

# Примеры использования

```php 
<?php

use Codememory\Component\Toolbar\Toolbar;

require_once 'vendor/autoload.php';

$toolbar = new Toolbar();

// Выводит toolbar
$toolbar->connectToolbar();
```

# Custom template
```php 
<?php

use Codememory\Component\Toolbar\Toolbar;

require_once 'vendor/autoload.php';

$toolbar = new Toolbar();

// Установить путь к шаблону
$toolbar->setTemplatePath('pathToTemplate');

// Выводит toolbar
$toolbar->connectToolbar();
```