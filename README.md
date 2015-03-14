Tutorial Symfony2 create CMS
============================

@link [http://symfony.com/doc/current/cmf/tutorial/getting-started.html](http://symfony.com/doc/current/cmf/tutorial/getting-started.html)


Installation
------------

Install using composer:
```bash
composer update
```

Next make sure the database, defined in `app/config/parameters.yml.dist` is created:
```bash
php app/console doctrine:database:create
```

Install the `Doctrine DBAL` tables
```bash
php app/console doctrine:phpcr:init:dbal
```

Create the bundle:
```bash
php app/console generate:bundle --namespace=Acme/BasicCmsBundle --dir=src --no-interaction --env=dev
```
