DoctrineTablePrefixBundle
=========================

Bundle for Symfony2 and Doctrine2 that allow prefixing yours databases tables.

[![Latest Stable Version](https://poser.pugx.org/th3mouk/doctrine-table-prefix-bundle/v/stable.svg)](https://packagist.org/packages/th3mouk/doctrine-table-prefix-bundle) [![Total Downloads](https://poser.pugx.org/th3mouk/doctrine-table-prefix-bundle/downloads.svg)](https://packagist.org/packages/th3mouk/doctrine-table-prefix-bundle) [![Latest Unstable Version](https://poser.pugx.org/th3mouk/doctrine-table-prefix-bundle/v/unstable.svg)](https://packagist.org/packages/th3mouk/doctrine-table-prefix-bundle) [![License](https://poser.pugx.org/th3mouk/doctrine-table-prefix-bundle/license.svg)](https://packagist.org/packages/th3mouk/doctrine-table-prefix-bundle)

## Installation

### First: Download DoctrineTablePrefixBundle using composer

#### Doing this :

Add DoctrineTablePrefixBundle in your composer.json:

``` js
{
    "require": {
        "th3mouk/doctrine-table-prefix-bundle": "~1.0"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update th3mouk/doctrine-table-prefix-bundle
```
Composer will install the bundle to your project's `vendor/Th3mouk` directory.

#### Or simply by typing this command :

``` bash
$ php composer.phar require th3mouk/doctrine-table-prefix-bundle:~1.0
```

**Warning**

This bundle doesn't contains any controller, so when the installation asks if you
want to update app/config/routing.yml say **NO** to the temptation.

If you are someone who loves to play with fire, or who was wrong pressing "enter", "enter", "enter"...

Remove this :
``` yaml
# app/config/routing.yml
th3mouk_doctrine_table_prefix:
    resource: "@Th3MoukDoctrineTablePrefixBundle/Resources/config/routing.yml"
    prefix:   /
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
