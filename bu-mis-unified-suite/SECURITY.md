# Security Policy

## Reporting a Vulnerability

Please report security issues privately to the maintainer or institutional repository owner. Do not open a public issue containing secrets, credentials, API keys, tokens, database details, or internal IP addresses.

## Sensitive Data Rules

Before publishing this plugin to GitHub, remove:

- API keys
- OAuth tokens
- Bearer tokens
- SQL/database passwords
- Internal IP addresses
- Patron data
- Staff personal data
- Student details
- Production logs
- Backup files containing secrets

## Recommended Practices

- Use WordPress nonces for AJAX actions.
- Use `current_user_can()` for admin operations.
- Sanitize all input using WordPress functions.
- Escape all output using `esc_html()`, `esc_attr()`, `esc_url()`.
- Use read-only public dashboard endpoints.
- Cache remote API calls to avoid slow page loads.
- Avoid exposing private operational data publicly.
