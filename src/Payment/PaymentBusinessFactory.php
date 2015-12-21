<?php
/**
 * Created by PhpStorm.
 * User: jimenator
 * Date: 21/12/15
 * Time: 19:17
 */
namespace Payment;

class PaymentBusinessFactory
{
    public static function create($object)
    {
        if ($object == 'membership') {
            return new Membership();
        }

        return new PhysicalProduct();
    }
}