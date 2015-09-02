# Kirby Safemail Plugin

This is a plugin for [Kirby](http://getkirby.com/) that prevents email address to be scanned by bots.

## How it works?

Safemail replaces the @ and . characters in the href part with random generated texts. And changes it back on click.
It also insterts extra characters on the text part, and replaces the @ and . characters with the correct ASCII codes to make it harder to recognize.

## Installation

Put the `safemail.php` in `/site/plugins`.

## Example usage

### 1. Kirbytext.

```markdown
(safemail: hello@examaple.com)
```

It is compatible with email kirbytext as well.
```markdown
(email: hello@eaxmaple.com)
```

Output:
```html
<a href="mailto:helloI0GDKexampleYVVWYcom" onclick="this.href=this.href.replace(/I0GDK/,'@').replace(/YVVWY/,'.')">
hello<span style="display:none">I0GDK</span>&#64;example<span style="display:none">YVVWY</span>&#46;com
</a>
```

**Please make sure that you are not using html() function on kirbytext(), otherwise the ASCII characters won't be displayed!**

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
(safemail: hello@examaple.com text: Contact us title: Title for contact us class: email)

(email: hello@examaple.com text: Contact us title: Title for contact us class: email)
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
[Amit Agarval](http://www.labnol.org/internet/hide-email-address-web-pages/28364/)

