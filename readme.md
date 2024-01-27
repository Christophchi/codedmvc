# Codedmvc

Welcome to Codedmvc - a lightweight PHP-based mini-framework developed by Christopher Chibuike.

## Overview

Codedmvc serves as a single-entry application providing control over HTTP requests, allowing filtering, sanitization, and routing for enhanced security and functionality.

## Features

- **Single Entry Application:** All requests pass through a central point for controlled processing.
- **Request Filtering and Sanitization:** Enhances security by filtering and sanitizing incoming HTTP requests.
- **Customizable Routing:** Facilitates routing requests to the appropriate controllers or actions.
- **Developer-Friendly:** Easy-to-understand structure and extensible codebase.

## Getting Started

To use Codedmvc in your project:

1. Clone the repository: `[https://github.com/Christophchi/codedmvc.git]`

2. upload the clone to your server/localhost and visit your browser. if you
are in a local environment, you need to start the server using the command below.

## Start the server

```php
php run start ( this will make usse of 127.0.0.1:8000 by default.)

or

php run start host-address:host-port (e.g: php run start 127.2.2.2:1919)
```

3. To add more endpoints/url, navigate to /src/Routes/web.php within the switch statement create a new case following the same pattern provided in the code. a contact us page would look like below. the contact inside the render method is your php file within the /src/views/contact.php you can manually create this file or using a command line as follows: 

## Contact Us steps

## php run create-view Contact

```php
case 'contact-us':
        echo $templates->render('contact', ['optional-data' => 'value']);
        break;
```

## Structure
- public
  - src
  - vendor
- .htaccess
- boot.php
- run (executable)
- composer.json
- composer.lock
- index.php
- README.md



## Usage

The primary entry point for the application is `index.php`. This file controls the incoming requests and routes them to the appropriate handlers. Ensure to handle requests, filters, and processing logic as needed.

```php
//php code
```

## Contributing

Contributions are welcome! If you'd like to contribute to Codedmvc Microservice, please:

1. Fork the repository and create your branch.
2. Make your enhancements or fixes.
3. Submit a pull request detailing the changes made.

## Issues

If you encounter any issues or have suggestions, please [open an issue](../../issues). Your feedback helps us improve Codedmvc Microservice.

## License

This project is licensed under the [MIT License](LICENSE).

---

[![GitHub Stars](https://img.shields.io/github/stars/[Your GitHub Username]/[Your Repo Name].svg?style=flat&label=Stars)](https://github.com/[Your GitHub Username]/[Your Repo Name])
[![GitHub Issues](https://img.shields.io/github/issues/[Your GitHub Username]/[Your Repo Name].svg)](https://github.com/[Your GitHub Username]/[Your Repo Name]/issues)
[![GitHub Forks](https://img.shields.io/github/forks/[Your GitHub Username]/[Your Repo Name].svg?style=flat&label=Forks)](https://github.com/[Your GitHub Username]/[Your Repo Name]/network)
```