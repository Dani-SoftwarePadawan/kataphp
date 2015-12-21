<?php
/**
 * Created by PhpStorm.
 * User: jimenator
 * Date: 21/12/15
 * Time: 19:18
 */

namespace PaymentTests;

use Payment\Membership;
use Payment\PaymentBusinessFactory;
use Payment\PhysicalProduct;

class PaymentBusinessTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function createPhysicalProductTest()
    {
        $this->assertTrue(PaymentBusinessFactory::create('book') instanceof PhysicalProduct);
    }

    /**
     * @test
     */
    public function createMemberShipTest()
    {
        $this->assertTrue(PaymentBusinessFactory::create('membership') instanceof Membership);
    }
}
