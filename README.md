# it give random nouns, verbs & adjectives.

## Installation

You can install the package via composer:

```bash
composer require harsh/word-generator
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="word-generator-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="word-generator-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="word-generator-views"
```

## Usage

```php
// enter count to get random words. (default: 5)
$wordGenerator = new Harsh\WordGenerator();

//to get all random words
echo $wordGenerator->all(5);
//to get random nouns
echo $wordGenerator->nouns(5);
//to get random verbs
echo $wordGenerator->verbs(5);
//to get random adjectives
echo $wordGenerator->adjectives(5);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/HarshJagad20/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [harsh](https://github.com/HarshJagad20)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
