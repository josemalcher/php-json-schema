<?php

namespace Swaggest\JsonSchema\Structure;


interface ObjectItemContract extends \ArrayAccess, \JsonSerializable, \Iterator
{
    public function getNestedObject($className);
    public function setNestedProperty($propertyName, $value, Egg $nestedEgg);
    public function addAdditionalPropertyName($name);
    public function setDocumentPath($path);
    public function setFromRef($ref);
    public function getFromRef();
}