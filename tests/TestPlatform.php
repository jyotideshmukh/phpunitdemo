<?php


namespace Jyoti\Tests;


use Jyoti\Src\SendMessage;
use PHPUnit\Framework\TestCase;

class TestPlatform extends TestCase
{

    public function isPlatformIntegrated(){

        $sendMessageObj = new SendMessage();
        $this->assertSame('Facebook',$sendMessageObj->isSetPlatform('Facebook'));
        $this->assertSame('Facebook',$sendMessageObj->isSetPlatform('Facebook'));
    }

}