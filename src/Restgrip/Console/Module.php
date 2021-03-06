<?php
namespace Restgrip\Console;

use Restgrip\Console\Command\EventSubscriberCommand;
use Restgrip\Module\ModuleAbstract;

/**
 * @package   Restgrip\Console
 * @author    Sarjono Mukti Aji <me@simukti.net>
 */
class Module extends ModuleAbstract
{
    protected function console()
    {
        $this->getDI()->setShared('console', Application::class);
        $this->getDI()->getShared('console')->addCommands(
            [
                new EventSubscriberCommand($this->getDI()),
            ]
        );
    }
}