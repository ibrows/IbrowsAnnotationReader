<?php

namespace Ibrows\AnnotationReader;

use Doctrine\Common\Annotations\Reader;

interface AnnotationReaderInterface
{
    const
        SCOPE_CLASS = 'class',
        SCOPE_METHOD = 'method',
        SCOPE_PROPERTY = 'property'
    ;

    /**
     * @param mixed $entity
     * @return array
     */
    public function getAnnotations($entity);

    /**
     * @param string|object $class
     * @param string $interface
     * @param string $scope
     * @param bool $first
     * @return AnnotationBag
     */
    public function getAnnotationsByType($class, $interface, $scope, $first = true);
}