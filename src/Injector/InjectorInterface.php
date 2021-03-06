<?php

namespace ObjectivePHP\ServicesFactory\Injector;

use ObjectivePHP\ServicesFactory\ServicesFactory;
use ObjectivePHP\ServicesFactory\Specification\ServiceSpecificationInterface;

/**
 * Interface InjectorInterface
 *
 * @package ObjectivePHP\ServicesFactory\Injector
 */
interface InjectorInterface
{
    /**
     * Inject dependencies
     *
     * @param object                             $instance
     * @param ServicesFactory                    $servicesFactory
     * @param ServiceSpecificationInterface|null $serviceSpecification
     */
    public function injectDependencies(
        $instance,
        ServicesFactory $servicesFactory,
        ServiceSpecificationInterface $serviceSpecification = null
    );
}
