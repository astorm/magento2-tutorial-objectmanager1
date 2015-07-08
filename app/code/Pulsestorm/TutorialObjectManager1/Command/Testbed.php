<?php
namespace Pulsestorm\TutorialObjectManager1\Command;


use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Testbed extends AbstractCommand
{
    protected function configure()
    {
        $this->setName('ps:testbed');
        $this->setDescription('A cli playground for testing commands');
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    
    }
}