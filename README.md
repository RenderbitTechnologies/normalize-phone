# normalize-phone

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Normalize a phone number (with or without country code).

## Background

We needed to send phone numbers to a third-party API as an amalgamation of the phone number and the country code, without the plus sign, brackets or any other special characters such as hyphens or spaces. We built this package as a solution to automatically parse user-input phone numbers and pass them as-is to the API, if already in the correct format - otherwise amend them and send the formatted numbers to the API.

This package looks for the environment variable `PHONE_DEFAULT_COUNTRY_CODE` to define the base country code to be prepended to the numbers with no country code. If no such variable is define, the package assumes a default of India (`91`).

## Install

Via Composer

``` bash
$ composer require renderbit/normalize-phone
```

## Usage

``` php
normalize_phone('9434012345');        // '919434012345'
normalize_phone('+919434012345');     // '919434012345'
normalize_phone('+91-9434012345');    // '919434012345'
normalize_phone('+19434012345');      // '19434012345'
normalize_phone('+91 9434012345');    // '919434012345'
normalize_phone('(+91) 94340 12345'); // '919434012345'
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email &ldquo;contact `at` renderbit `dot` com&rdquo; instead of using the issue tracker.

## Credits

- [Renderbit Technologies][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/renderbit/normalize-phone.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/RenderbitTechnologies/normalize-phone/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/RenderbitTechnologies/normalize-phone.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/RenderbitTechnologies/normalize-phone.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/RenderbitTechnologies/normalize-phone.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/RenderbitTechnologies/normalize-phone
[link-travis]: https://travis-ci.org/RenderbitTechnologies/normalize-phone
[link-scrutinizer]: https://scrutinizer-ci.com/g/RenderbitTechnologies/normalize-phone/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/RenderbitTechnologies/normalize-phone
[link-downloads]: https://packagist.org/packages/RenderbitTechnologies/normalize-phone
[link-author]: https://github.com/RenderbitTechnologies
[link-contributors]: ../../contributors
