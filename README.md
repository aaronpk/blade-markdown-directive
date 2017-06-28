Blade Markdown Directive
========================

This adds a Laravel [Blade](https://laravel.com/docs/5.4/blade#extending-blade) directive to render the enclosed text as Markdown.

Installation
------------

First require this project using Composer:

```
composer require p3k/blade-markdown-directive
```

Add the following to your `config/app.php` file in the `providers` section:

```php
  p3k\MarkdownServiceProvider::class,
```

Usage
-----

Now in any `.blade.php` file, you can use the `@markdown` directive to render Markdown.

```
<div>
  @markdown($description)
</div>
```
