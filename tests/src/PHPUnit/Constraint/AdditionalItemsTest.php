<?php

namespace Yaoi\Schema\Tests\PHPUnit\Constraint;


use Yaoi\Schema\Exception;
use Yaoi\Schema\SchemaLoader;

class AdditionalItemsTest extends \PHPUnit_Framework_TestCase
{
    public function testAdditionalItemsAreNotAllowed()
    {
        $schema = SchemaLoader::create()->readSchema(
            array(
                'items' => array(
                    new \stdClass(),
                    new \stdClass(),
                    new \stdClass(),
                ),
                'additionalItems' => false,
            )
        );

        $this->setExpectedException(get_class(new Exception()));
        $schema->import(array(1,2,3,4));
    }

}