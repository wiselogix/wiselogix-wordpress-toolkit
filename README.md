# Wiselogix WordPress Toolkit

Practical WordPress development utilities, snippets, and helpers maintained by **Wiselogix Technologies**.

The goal of this project is to provide small, reusable, production-friendly solutions for common WordPress development tasks.

## What's Included

- WordPress performance helpers
- Security and hardening snippets
- Admin utilities
- Media utilities
- WooCommerce helpers
- SEO-related utilities
- Reusable PHP snippets

## Current Status

🚧 **Early public release** — the toolkit is being built incrementally with additional utilities and improvements planned over time.

## Installation

Clone the repository:

```bash
git clone https://github.com/wiselogix/wiselogix-wordpress-toolkit.git
```

### WordPress Plugin

To install the included utility plugin:

1. Copy the `plugin/wiselogix-wordpress-toolkit` directory to your WordPress installation:

   ```text
   wp-content/plugins/
   ```

2. Activate **Wiselogix WordPress Toolkit** from the WordPress Admin Dashboard.
3. Review and test the functionality before using it on a production website.

## Repository Structure

```text
wiselogix-wordpress-toolkit/
├── .github/
│   ├── ISSUE_TEMPLATE/
│   └── pull_request_template.md
├── docs/
├── plugin/
│   └── wiselogix-wordpress-toolkit/
├── snippets/
│   ├── admin/
│   ├── performance/
│   ├── security/
│   ├── seo/
│   └── woocommerce/
├── CHANGELOG.md
├── CONTRIBUTING.md
├── LICENSE
└── README.md
```

## Philosophy

This project focuses on:

- Simple and maintainable code
- Clear documentation
- WordPress-native APIs
- Minimal dependencies
- Safe defaults
- Easy customization
- Practical solutions for real-world WordPress projects

## Requirements

- WordPress 6.0 or higher
- PHP 7.4 or higher
- PHP 8.x recommended

Individual snippets or utilities may have additional requirements.

## Development & Testing

Always test changes in a staging or development environment before deploying them to a production website.

Some utilities intentionally modify default WordPress or WooCommerce behavior. Review each snippet and make sure it is appropriate for your specific project before using it.

## Contributing

Suggestions, bug reports, improvements, and pull requests are welcome.

Before submitting a contribution:

- Test your changes
- Keep code focused and maintainable
- Follow WordPress coding practices where practical
- Document new functionality
- Do not include passwords, API keys, or other credentials
- Do not include private client or proprietary project code

See [CONTRIBUTING.md](CONTRIBUTING.md) for contribution guidelines.

## Security

If you discover a potential security vulnerability, please do not publish sensitive details in a public GitHub issue.

Contact Wiselogix privately so the issue can be reviewed and addressed responsibly.

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for the project's release history and updates.

## License

This project is licensed under the **MIT License**.

See [LICENSE](LICENSE) for the complete license text.

## About Wiselogix

**Wiselogix Technologies** is a software development company specializing in WordPress, WooCommerce, web development, and custom software solutions.

Website: [https://wiselogix.com](https://wiselogix.com)

---

Maintained by **Wiselogix Technologies**
