additional assistants
=====================
additional assistants

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist djeager/yii2-helpers "*"
```

or add

```
"djeager/yii2-helpers": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \djeager\helpers\UrlHelper::addSufix('http://exempale.com/path/to','_dev')?>
```