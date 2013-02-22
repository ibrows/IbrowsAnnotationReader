<?php

namespace Ibrows\AnnotationReader;

use Ibrows\AnnotationReader\Bag\ClassAnnotationBag;
use Ibrows\AnnotationReader\Bag\MethodAnnotationBag;
use Ibrows\AnnotationReader\Bag\PropertyAnnotationBag;

class AnnotationBag
{
    /**
     * @var string
     */
    protected $class;

    /**
     * @var ClassAnnotationBag
     */
    protected $classAnnotationBag;

    /**
     * @var MethodAnnotationBag
     */
    protected $methodAnnotationBag;

    /**
     * @var PropertyAnnotationBag
     */
    protected $propertyAnnotationBag;

    /**
     * @param string $class
     * @param ClassAnnotationBag $classAnnotationBag
     * @param MethodAnnotationBag $methodAnnotationBag
     * @param PropertyAnnotationBag $propertyAnnotationBag
     */
    public function __construct(
        $class,
        ClassAnnotationBag $classAnnotationBag = null,
        MethodAnnotationBag $methodAnnotationBag = null,
        PropertyAnnotationBag $propertyAnnotationBag = null
    ){
        if(!$classAnnotationBag){
            $classAnnotationBag = new ClassAnnotationBag();
        }

        if(!$methodAnnotationBag){
            $methodAnnotationBag = new MethodAnnotationBag();
        }

        if(!$propertyAnnotationBag){
            $propertyAnnotationBag = new PropertyAnnotationBag();
        }

        $this->class = $class;

        $this->classAnnotationBag = $classAnnotationBag;
        $this->methodAnnotationBag = $methodAnnotationBag;
        $this->propertyAnnotationBag = $propertyAnnotationBag;
    }

    /**
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return ClassAnnotationBag
     */
    public function getClassAnnotationBag()
    {
        return $this->classAnnotationBag;
    }

    /**
     * @return MethodAnnotationBag
     */
    public function getMethodAnnotationBag()
    {
        return $this->methodAnnotationBag;
    }

    /**
     * @return PropertyAnnotationBag
     */
    public function getPropertyAnnotationBag()
    {
        return $this->propertyAnnotationBag;
    }
}