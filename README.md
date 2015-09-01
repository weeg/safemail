# Kirby Safemail Plugin

This is a plugin for [Kirby](http://getkirby.com/) that prevents email address to be scanned by bots.

## Installation

Put the `safemail.php` in `/site/plugins`.

## Example usage

### Using it in kirbytext.

```php
(safemail: hello@examaple.com text: Contact us)
```

Output:
```html
<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#101;&#108;&#108;&#111;&#64;&#101;&#120;&#97;&#109;&#112;&#108;&#101;&#46;&#99;&#111;&#109;" style="unicode-bidi:bidi-override;direction:rtl">moc.elpmaxe@olleh</a>
```

It is compatible with email kirbytext as well.
```php
(email: hello@eaxmaple.com text: Contact us)
```

### Using it on fileds
```php
<?php echo $page->my_email()->safemail('Contact us') ?>
```

### Using it anywhere else
```php
<?php echo safemail('hello@example.com', 'Contact us'); ?>
```


## Parameters
email 
text (optional, default: email): Displayed text
title (optional): Link title
class (optional): Extra classes

## Author

David Vigvari
