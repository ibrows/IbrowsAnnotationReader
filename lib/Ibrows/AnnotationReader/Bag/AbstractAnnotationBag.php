<?php

namespace Ibrows\AnnotationReader\Bag;

abstract class AbstractAnnotationBag
{
    /**
     * @var array
     */
    protected $annotations = array();

    /**
     * @var array
     */
    protected $annotationsByInterface = array();

    /**
     * @return array
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * @param string $interface
     * @return array
     */
    public function getAnnotationsByInterface($interface = null)
    {
        if(!$interface){
            return $this->annotationsByInterface;
        }

        return isset($this->annotationsByInterface[$interface]) ?
            $this->annotationsByInterface[$interface] : array();
    }
}