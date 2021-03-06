<?php

use Rector\Transform\Rector\MethodCall\MethodCallToAnotherMethodCallWithArgumentsRector;
use Rector\Transform\Tests\Rector\MethodCall\MethodCallToAnotherMethodCallWithArgumentsRector\Source\NetteServiceDefinition;
use Rector\Transform\ValueObject\MethodCallToAnotherMethodCallWithArguments;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\SymfonyPhpConfig\ValueObjectInliner;

return static function (ContainerConfigurator $containerConfigurator): void {
    $services = $containerConfigurator->services();
    $services->set(MethodCallToAnotherMethodCallWithArgumentsRector::class)->call(
        'configure',
        [[
            MethodCallToAnotherMethodCallWithArgumentsRector::METHOD_CALL_RENAMES_WITH_ADDED_ARGUMENTS => ValueObjectInliner::inline([
                


























                new MethodCallToAnotherMethodCallWithArguments(
                    NetteServiceDefinition::class,
                    'setInject',
                    'addTag',
                    ['inject']),
            ]
            ),
        ]]
    );
};
