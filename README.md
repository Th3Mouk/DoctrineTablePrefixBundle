DoctrineTablePrefixBundle
=========================

Bundle for Symfony2 and Doctrine2 that allow prefixing yours databases tables.

## Installation

### First: Download DoctrineTablePrefixBundle using composer

#### Doing this :

Add DoctrineTablePrefixBundle in your composer.json:

``` js
{
    "require": {
        "Th3mouk/doctrine-table-prefix-bundle": "~1.0"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update Th3mouk/doctrine-table-prefix-bundle
```
Composer will install the bundle to your project's `vendor/Th3mouk` directory.

#### Or simply by typing this command :

``` bash
$ php composer.phar require Th3mouk/doctrine-table-prefix-bundle:~1.0
```

### Second : Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Th3mouk\DoctrineTablePrefixBundle\Th3moukDoctrineTablePrefixBundle(),
    );
}
```

### Finally : Choose your prefix

Default prefix is "sf2_".

You can change the prefix in your configuration:

``` yaml
# app/config/config.yml
th3mouk_doctrine_table_prefix:
    prefix: sf2_
```
