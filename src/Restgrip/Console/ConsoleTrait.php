<?php
namespace Restgrip\Console;

use Phalcon\DiInterface;

/**
 * @method DiInterface getDI()
 * @package   Restgrip\Console
 * @author    Sarjono Mukti Aji <me@simukti.net>
 */
trait ConsoleTrait
{
    /**
     * @return Application
     */
    public function getConsole()
    {
        return $this->getDI()->getShared('console');
    }
}