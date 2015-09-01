# Kirby Safemail Plugin

This is a plugin for [Kirby](http://getkirby.com/) that prevents email address to be scanned by bots.

## Installation

Put the `safemail.php` in `/site/plugins`.

## Example usage

### 1. Kirbytext.

```markdown
(safemail: hello@examaple.com text: Contact us)
```

It is compatible with email kirbytext as well.
```markdown
(email: hello@eaxmaple.com text: Contact us)
```

Output:
```html
<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#101;&#108;&#108;&#111;&#64;&#101;&#120;&#97;&#109;&#112;&#108;&#101;&#46;&#99;&#111;&#109;" style="unicode-bidi:bidi-override;direction:rtl">moc.elpmaxe@olleh</a>
```

### 2. Fields
```php
<?php echo $page->my_email()->safemail('Contact us') ?>
```

### 3. Anywhere else
```php
<?php echo safemail('hello@example.com', 'Contact us'); ?>
```

### Full featured examples
```markdown
(safemail: hello@examaple.com text: Contact us title: Contact us title, class:email)

(email: hello@examaple.com text: Contact us title: Contact us title, class:email)
```

```php
<?php echo $page->my_email()->safemail('Contact us', 'Contact us title', 'email') ?>
```

```php
<?php echo safemail('Contact us', 'Contact us title', 'email') ?>
```

## Parameters
* email 
* text (optional, default: email): Displayed text
* title (optional): Link title
* class (optional): Extra classes

## Author

David Vigvari
