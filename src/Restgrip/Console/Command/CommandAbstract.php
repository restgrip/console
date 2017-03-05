<?php
namespace Restgrip\Console\Command;

use Phalcon\DiInterface;
use Restgrip\Container\ContainerTrait;
use Symfony\Component\Console\Command\Command;

/**
 * @package   Restgrip\Console\Command
 * @author    Sarjono Mukti Aji <me@simukti.net>
 */
abstract class CommandAbstract extends Command
{
    use ContainerTrait;
    
    /**
     * @param DiInterface $container
     * @param null        $name
     */
    public function __construct(DiInterface $container, $name = null)
    {
        parent::__construct($name);
        $this->setDI($container);
    }
}