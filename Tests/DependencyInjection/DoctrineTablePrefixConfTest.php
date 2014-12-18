<?php

namespace Th3mouk\DoctrineTablePrefixBundle\Tests\DependencyInjection;

use Th3mouk\DoctrineTablePrefixBundle\DependencyInjection\Th3MoukDoctrineTablePrefixExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DoctrineTablePrefixConfTest extends \PHPUnit_Framework_TestCase
{
    public function testDefault()
    {
        $container = new ContainerBuilder();
        $loader = new Th3MoukDoctrineTablePrefixExtension();
        $loader->load(array(array()), $container);
        $this->assertEquals('sf2_', $container->getParameter('th3mouk_doctrine_table_prefix.prefix'));
        $this->assertTrue($container->hasDefinition('th3mouk_doctrine_table_prefix.subscriber'));
        $this->assertTrue($container->getDefinition('th3mouk_doctrine_table_prefix.subscriber')->hasTag('doctrine.event_subscriber'));
    }
}
