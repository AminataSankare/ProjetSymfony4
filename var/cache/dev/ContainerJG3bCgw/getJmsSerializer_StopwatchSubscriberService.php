<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.stopwatch_subscriber' shared service.

include_once $this->targetDirs[3].'/vendor/jms/serializer/src/JMS/Serializer/EventDispatcher/EventSubscriberInterface.php';
include_once $this->targetDirs[3].'/vendor/jms/serializer-bundle/Serializer/StopwatchEventSubscriber.php';

return $this->services['jms_serializer.stopwatch_subscriber'] = new \JMS\SerializerBundle\Serializer\StopwatchEventSubscriber(($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
