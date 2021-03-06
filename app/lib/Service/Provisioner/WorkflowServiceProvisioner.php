<?php

namespace Honeybee\FrameworkBinding\Silex\Service\Provisioner;

use Auryn\Injector;
use Honeybee\FrameworkBinding\Silex\Config\ConfigProviderInterface;
use Honeybee\FrameworkBinding\Silex\Service\Provisioner\ProvisionerInterface;
use Honeybee\Infrastructure\Config\SettingsInterface;
use Honeybee\Infrastructure\Workflow\StateMachineBuilder;
use Honeybee\Infrastructure\Workflow\StateMachineBuilderInterface;
use Honeybee\Infrastructure\Workflow\WorkflowServiceInterface;
use Honeybee\ServiceDefinitionInterface;
use Pimple\Container;
use Psr\Log\LoggerInterface;

class WorkflowServiceProvisioner implements ProvisionerInterface
{
    public function provision(
        Container $app,
        Injector $injector,
        ConfigProviderInterface $configProvider,
        ServiceDefinitionInterface $serviceDefinition,
        SettingsInterface $provisionerSettings
    ) {
        $factoryDelegate = function (
            StateMachineBuilderInterface $stateMachineBuilder,
            LoggerInterface $logger
        ) use (
            $serviceDefinition,
            $provisionerSettings
        ) {
            $config = $serviceDefinition->getConfig();
            $service = $serviceDefinition->getClass();
            return new $service($config, $stateMachineBuilder, $logger);
        };

        $service = $serviceDefinition->getClass();

        $injector
            ->delegate($service, $factoryDelegate)
            ->share($service)
            ->alias(WorkflowServiceInterface::CLASS, $service);
    }
}
