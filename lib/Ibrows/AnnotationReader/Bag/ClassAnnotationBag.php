<?php

namespace Ibrows\AnnotationReader\Bag;

class ClassAnnotationBag extends AbstractAnnotationBag
{
    /**
     * @param string $interface
     * @param object $annotation
     * @return ClassAnnotationBag
     */
    public function addAnnotation($interface, $annotation)
    {
        if(!isset($this->annotations[$interface])){
            $this->annotations[$interface] = array();
        }

        if(!isset($this->annotationsByInterface[$interface])){
            $this->annotationsByInterface[$interface] = array();
        }

        $this->annotations[$interface][] = $annotation;
        $this->annotationsByInterface[$interface][] = $annotation;

        return $this;
    }
}