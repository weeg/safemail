# Kirby Safemail Plugin

This is a plugin for [Kirby](http://getkirby.com/) that prevents email address to be scanned by bots.

## How it works?

Safemail converts the email address to ASCII characters with, the mailto: part as well. And reverses the order of the text part of the email. This way spam bots are not able to recognize the email address (hopefully :)), however leaving it still functional.

The only sideback of this solution is, if you are trying to copy the email address it will be in backward. i.e: moc.elpmaxe@olleh

## Installation

Put the `safemail.php` in `/site/plugins`.

## Example usage

### 1. Kirbytext.

```markdown
(safemail: hello@examaple.com text: Contact us)
```

It is compatible with email kirbytext as well.
```markdown
(email: hello@eaxmaple.com)
```

Output:
```html
<a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#101;&#108;&#108;&#111;&#64;&#101;&#120;&#97;&#109;&#112;&#108;&#101;&#46;&#99;&#111;&#109;" style="unicode-bidi:bidi-override;direction:rtl">moc.elpmaxe@olleh</a>
```

### 2. Fields
```php
<?php echo $page->my_email()->safemail() ?>
```

### 3. Anywhere else
```php
<?php echo safemail('hello@example.com'); ?>
```

### 4. Full featured examples
```markdown
(safemail: hello@examaple.com text: Contact us title: Title for contact us, class: email)

(email: hello@examaple.com text: Contact us title: Title for contact us, class: email)
```

```php
<?php echo $page->my_email()->safemail('Contact us', ' Title for contact us', 'email') ?>
```

```php
<?php echo safemail('Contact us', ' Title for contact us', 'email') ?>
```

## Parameters
* email 
* text (optional, default: email): Displayed text
* title (optional): Link title
* class (optional): Extra classes

## Author

David Vigvari

## Credits
[Matt Berther](https://matt.berther.io/2009/01/15/hiding-an-email-address-from-spam-harvesters/)
[David Walsh](http://davidwalsh.name/php-email-encode-prevent-spam)
