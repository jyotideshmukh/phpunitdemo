<?php


namespace Tests;


use App\Order;
use App\PaymentGateway;

class OrderTest extends \PHPUnit\Framework\TestCase
{

    public function testOrderProcessed(){
        $gateway =  $this->createMock(PaymentGateway::class);
        //$gateway = $this->getMockBuilder('PaymentGateway')
            //->getMock();
        $gateway->method('charge')->willReturn(true);
        $order = new Order($gateway);
        $order->setAmount(200);
        $this->assertTrue($order->processOrder());

    }
}