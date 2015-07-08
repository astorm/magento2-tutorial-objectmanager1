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
        $manager = $this->getObjectManager();
        $object  = $manager->get('Pulsestorm\TutorialObjectManager1\Model\Example');        

        $object->message = 'Hello PHP';

        $output->writeln(
            $object->getHelloMessage()
        );                
                
        $object  = $manager->get('Pulsestorm\TutorialObjectManager1\Model\Example');        
        $output->writeln(
            $object->getHelloMessage()
        );                        
    }
}