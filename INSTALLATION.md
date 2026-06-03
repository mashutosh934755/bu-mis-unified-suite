# Installation Guide

## Requirements

- WordPress 6.0 or later
- PHP 8.0 or later recommended
- Apache/Nginx
- MySQL/MariaDB
- Administrator access to WordPress
- API access to external systems, if live integrations are used

## Installation

1. Download or clone this repository.
2. Copy the plugin folder to:

```text
wp-content/plugins/bu-mis-unified-suite/
```

3. Ensure the main plugin file exists:

```text
wp-content/plugins/bu-mis-unified-suite/bu-mis-unified-suite.php
```

4. Activate the plugin from WordPress Admin → Plugins.

5. Open the MIS dashboard from the WordPress admin menu.

## Public Dashboard

Create a WordPress page with slug:

```text
/mis
```

Then add the public dashboard shortcode or template hook used in your plugin.

Example shortcode placeholder:

```text
[bu_mis_public_dashboard]
```

## Linux Command Example

```bash
cd /var/www/html
sudo mkdir -p wp-content/plugins/bu-mis-unified-suite
sudo chown -R www-data:www-data wp-content/plugins/bu-mis-unified-suite
wp plugin activate bu-mis-unified-suite --allow-root
wp cache flush --allow-root
sudo systemctl reload apache2
```
