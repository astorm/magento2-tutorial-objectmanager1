<?php
namespace Pulsestorm\TutorialObjectManager1\Model;
class Example
{
    public $message = 'Hello Magento!';
    public function getHelloMessage()
    {
        return $this->message;
    }
}