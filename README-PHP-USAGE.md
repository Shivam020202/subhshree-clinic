# PHP Dynamic Header Implementation

## Overview
The project has been converted to use PHP includes for better code reusability and dynamic page titles.

## File Structure
- `header-links.php` - Contains the `<head>` section with dynamic meta tags
- `header.php` - Contains the header navigation and mobile menu
- `footer.php` - Contains the footer section

## How to Use

### Creating a New Page

1. **Start with PHP variables** at the top of your file:
```php
<?php
$page_title = "Your Page Title - SMT Clinic";
$page_description = "Description of your page for SEO";
$page_keywords = "keyword1, keyword2, keyword3";
?>
```

2. **Include the header-links.php** after the opening `<html>` tag:
```php
<!doctype html>
<html class="no-js" lang="zxx">
<?php include 'header-links.php'; ?>
```

3. **Include the header.php** after the opening `<body>` tag:
```php
<body>
<?php include 'header.php'; ?>
```

4. **Include the footer.php** before the closing `</body>` tag:
```php
<?php include 'footer.php'; ?>
```

### Complete Example

```php
<?php
$page_title = "Chemical Peels - SMT Skin Clinic";
$page_description = "Professional Chemical Peel treatments at SMT Skin Clinic";
$page_keywords = "chemical peels, skin treatment, SMT clinic";
?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include 'header-links.php'; ?>

<body>

<?php include 'header.php'; ?>

    <!-- Your page content here -->

<?php include 'footer.php'; ?>

    <!-- JavaScript files -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- ... other scripts ... -->

</body>
</html>
```

## Benefits

1. **Dynamic Page Titles**: Each page can have its own unique title and meta tags
2. **Easy Maintenance**: Update header/footer once, changes reflect across all pages
3. **SEO Optimization**: Custom meta descriptions and keywords per page
4. **Code Reusability**: No duplicate code across pages

## Default Values

If you don't set the variables, the following defaults are used:
- `$page_title` → "SMT Clinic"
- `$page_description` → "SMT Clinic - Your Health, Our Priority"
- `$page_keywords` → "clinic, health, wellness, medical, treatment, care, therapy, doctor, hospital, healthcare"

## Running PHP Files

To test PHP files locally, you need a PHP server:
- Use XAMPP, WAMP, or MAMP
- Or use PHP's built-in server: `php -S localhost:8000`
