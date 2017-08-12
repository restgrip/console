<?php
namespace Restgrip\Console\Command;

use Restgrip\Event\EventsManagerTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @package   Restgrip\Console\Command
 * @author    Sarjono Mukti Aji <me@simukti.net>
 */
class EventSubscriberCommand extends CommandAbstract
{
    use EventsManagerTrait;
    
    protected function configure()
    {
        $this->setName('event:list')->setDescription('List all events and its listener class');
    }
    
    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $evm       = $this->getEventsManager();
        $listeners = $evm->getRegisteredListeners();
        
        foreach ($listeners as $scope => $data) {
            $output->writeln(sprintf("%s :", $scope));
            foreach ($data as $sub) {
                $output->writeln(sprintf("  - %s (priority: %d)", $sub['class'], $sub['priority']));
            }
        }
    }
}