<?php

namespace Oro\Bundle\CallBundle\Tests\Unit\Entity;

use Oro\Bundle\CallBundle\Entity\CallDirection;

class CallDirectionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider getSetDataProvider
     */
    public function testGetSet($property, $value, $expected)
    {
        $directionName = 'forward';
        $obj = new CallDirection($directionName);
        $this->assertEquals($directionName, $obj->getName());

        call_user_func_array(array($obj, 'set' . ucfirst($property)), array($value));
        $this->assertEquals($expected, call_user_func_array(array($obj, 'get' . ucfirst($property)), array()));
    }

    public function getSetDataProvider()
    {
        return array(
            'label' => array('label', 'my direction', 'my direction'),
        );
    }
}
