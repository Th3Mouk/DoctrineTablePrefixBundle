DoctrineTablePrefixBundle
=========================

Bundle for Symfony2 and Doctrine2 that allow prefixing yours databases tables.

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/01bc40ce-8e37-4e8a-8036-196dd35efc43/mini.png)](https://insight.sensiolabs.com/projects/01bc40ce-8e37-4e8a-8036-196dd35efc43) [![Latest Stable Version](https://poser.pugx.org/th3mouk/doctrine-table-prefix-bundle/v/stable.svg)](https://packagist.org/packages/th3mouk/doctrine-table-prefix-bundle) [![Total Downloads](https://poser.pugx.org/th3mouk/doctrine-table-prefix-bundle/downloads.svg)](https://packagist.org/packages/th3mouk/doctrine-table-prefix-bundle) [![Build Status](https://travis-ci.org/Th3Mouk/DoctrineTablePrefixBundle.svg?branch=master)](https://travis-ci.org/Th3Mouk/DoctrineTablePrefixBundle) [![Latest Unstable Version](https://poser.pugx.org/th3mouk/doctrine-table-prefix-bundle/v/unstable.svg)](https://packagist.org/packages/th3mouk/doctrine-table-prefix-bundle) [![License](https://poser.pugx.org/th3mouk/doctrine-table-prefix-bundle/license.svg)](https://packagist.org/packages/th3mouk/doctrine-table-prefix-bundle)

## Installation

### First: Download DoctrineTablePrefixBundle using composer

Using command line

```sh
composer require th3mouk/doctrine-table-prefix-bundle
```

Or editing `composer.json` :

```json
{
    "require": {
        "th3mouk/doctrine-table-prefix-bundle": "^1.0"
    }
}
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
        // ...
    );
}
```

### Finally : Choose your prefix

Default prefix is "sf2_".

You can change the prefix in your configuration:

```yml
# app/config/config.yml
th3mouk_doctrine_table_prefix:
    prefix: sf2_
```
