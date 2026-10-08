# Wiselogix WordPress Toolkit

Practical WordPress development utilities, snippets, and helpers maintained by [Wiselogix Technologies](https://wiselogix.com).

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

🚧 Early public release — the toolkit is being built incrementally.

## Installation

Clone the repository:

```bash
git clone https://github.com/wiselogix/wiselogix-wordpress-toolkit.git
```

For the utility plugin:

1. Copy `plugin/wiselogix-wordpress-toolkit` to `wp-content/plugins/`.
2. Activate **Wiselogix WordPress Toolkit** from WordPress Admin.
3. Review the source before enabling any optional utility.

## Repository Structure

```text
wiselogix-wordpress-toolkit/
├── plugin/
│   └── wiselogix-wordpress-toolkit/
├── snippets/
│   ├── admin/
│   ├── performance/
│   ├── security/
│   ├── seo/
│   └── woocommerce/
├── docs/
├── CHANGELOG.md
├── CONTRIBUTING.md
├── LICENSE
└── README.md
```

## Philosophy

This project focuses on:

- Simple code
- Clear documentation
- WordPress-native APIs
- Minimal dependencies
- Safe defaults
- Easy customization

## Requirements

- WordPress 6.0+
- PHP 7.4+
- PHP 8.x recommended

Some snippets may have additional requirements.

## Disclaimer

Always test snippets in a staging environment before using them on a production website. Some utilities intentionally change WordPress behavior and may not be appropriate for every site.

## Contributing

Suggestions, bug reports, and pull requests are welcome. See [CONTRIBUTING.md](CONTRIBUTING.md).

## License

MIT License. See [LICENSE](LICENSE).

---

Maintained by **Wiselogix Technologies**  
https://wiselogix.com

