<?php
namespace Restgrip\Console;

use Phalcon\Di\InjectionAwareInterface;
use Restgrip\Container\ContainerTrait;
use Symfony\Component\Console\Application as BaseApplication;

/**
 * @package   Restgrip\Console
 * @author    Sarjono Mukti Aji <me@simukti.net>
 */
class Application extends BaseApplication implements InjectionAwareInterface
{
    use ContainerTrait;
}