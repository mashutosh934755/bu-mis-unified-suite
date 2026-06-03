# Configuration Guide

Create a local configuration file or use WordPress options for API configuration.

## Recommended Configuration Keys

```php
define('BU_MIS_KOHA_API_BASE', 'https://example.edu/koha-api');
define('BU_MIS_DSPACE_API_BASE', 'https://repository.example.edu/server/api');
define('BU_MIS_OJS_API_BASE', 'https://journals.example.edu');
define('BU_MIS_PTC_API_BASE', 'https://ptc.example.edu');
define('BU_MIS_PLAGIARISM_API_BASE', 'https://example.edu/wp-json/bu-plagiarism/v2');
```

## Do Not Commit

Never commit:

- API keys
- Passwords
- Bearer tokens
- Internal IP addresses
- Private database credentials
- Real user data
- Full production JSON dumps

Use `sample-config.php` for placeholders only.
