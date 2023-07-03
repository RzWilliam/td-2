# td-2

##Installation

```bash
composer require willi/td2
```

##Local

```bash
composer install
```

```bash
php vendor/bin/phpstan analyse src --level=max
```

```bash
php vendor/bin/php-cs-fixer fix src --rules=@PSR12
```

```bash
php vendor/bin/phpunit tests
```