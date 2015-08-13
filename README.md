# GiantBombBundle

This is a Symfony bundle built on top of the [dborsatto/php-giantbomb](https://github.com/dborsatto/php-giantbomb) package.

## Installation

Install it with composer:
```
composer require dborsatto/giantbomb-bundle
```

## Configuration

You only need to add an api_key to you config.yml.
```
giantbomb:
    api_key: YOUR_KEY_HERE
```

## Use

The bundle provides a shortcut to the Client object:

```php
// Inside a controller
$client = $this->get('giantbomb.client');
$results = $client->search('Uncharted', 'game,franchise');
```

For all possible uses refer to the [dborsatto/php-giantbomb](https://github.com/dborsatto/php-giantbomb) documentation.
