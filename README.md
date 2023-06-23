# Quick helper to count tokens 


**GO USE https://github.com/yethee/tiktoken-php 👉**

# Below is supersceded by the above ☝️



[![Latest Version on Packagist](https://img.shields.io/packagist/v/sundance-solutions/larachain-token-count.svg?style=flat-square)](https://packagist.org/packages/sundance-solutions/larachain-token-count)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sundance-solutions/larachain-token-count/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sundance-solutions/larachain-token-count/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sundance-solutions/larachain-token-count/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sundance-solutions/larachain-token-count/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sundance-solutions/larachain-token-count.svg?style=flat-square)](https://packagist.org/packages/sundance-solutions/larachain-token-count)

GPT-3 Approximate Token Counter in PHP

This repository contains a PHP function that approximates the token count of a text string, following the tokenization rules used by OpenAI's GPT-3.

GPT-3, an advanced language model developed by OpenAI, reads text in chunks called tokens. A token in GPT-3 can be as short as one character or as long as one word (e.g., 'a', 'apple'). For languages with more complex scripts (like Chinese, Japanese, etc.), one character can be multiple tokens. Spaces and punctuation are also considered separate tokens.

The function provided here offers an approximation of how GPT-3 might tokenize a given string, counting words, spaces, and punctuation as separate tokens. This allows you to estimate the number of tokens in a text string without making an API call, which can be useful for monitoring usage or avoiding unnecessary costs.

Please note that this is a simplified approximation, and the actual tokenization may vary slightly in GPT-3's actual implementation. In particular, some words might be tokenized into multiple tokens if they contain special characters or are very long. Additionally, this method may not accurately tokenize languages other than English, especially those using non-Latin characters.

As of the last update in September 2021, OpenAI has not provided a public method for accurately counting tokens the way GPT-3 does. Therefore, this function is an estimation, not a guaranteed accurate count.

## Installation

You can install the package via composer:

```bash
composer require sundance-solutions/larachain-token-count
```

## Usage

```php
use SundanceSolutions\LarachainTokenCount\Facades\LarachainTokenCount;
    
    $text = "Your document text...";
    $results = LarachainTokenCount::count($text);
    expect($results)->toEqual(8);

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Alfred Nutile](https://github.com/alnutile)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
