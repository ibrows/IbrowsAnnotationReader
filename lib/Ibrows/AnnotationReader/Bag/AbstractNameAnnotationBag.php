<?php

namespace Ibrows\AnnotationReader\Bag;

abstract class AbstractNameAnnotationBag extends AbstractAnnotationBag
{
    /**
     * @var array
     */
    protected $annotationsByName = array();

    /**
     * @param string $name
     * @param string $interface
     * @param object $annotation
     * @return PropertyAnnotationBag
     */
    public function addAnnotation($name, $interface, $annotation)
    {
        if(!isset($this->annotationsByName[$name])){
            $this->annotationsByName[$name] = array();
        }

        if(!isset($this->annotationsByName[$name][$interface])){
            $this->annotationsByName[$name][$interface] = array();
        }

        if(!isset($this->annotationsByInterface[$interface])){
            $this->annotationsByInterface[$interface] = array();
        }

        if(!isset($this->annotationsByInterface[$interface][$name])){
            $this->annotationsByInterface[$interface][$name] = array();
        }

        $this->annotations[$name][$interface][] = $annotation;
        $this->annotationsByInterface[$interface][$name][] = $annotation;
        return $this;
    }

    /**
     * @param string $name
     * @return array
     */
    public function getAnnotationsByName($name)
    {
        return isset($this->annotationsByName[$name]) ? $this->annotationsByName[$name] : array();
    }

    /**
     * @param string $name
     * @param string $interface
     * @return array
     */
    public function getAnnotationsByNameAndInterface($name, $interface)
    {
        if(!isset($this->annotationsByName[$name])){
            return array();
        }

        if(!isset($this->annotationsByName[$name][$interface])){
            return array();
        }

        return $this->annotationsByName[$name][$interface];
    }
}