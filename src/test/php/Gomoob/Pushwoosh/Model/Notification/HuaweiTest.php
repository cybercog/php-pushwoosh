<?php

namespace Gomoob\Pushwoosh\Model\Notification;

use PHPUnit\Framework\TestCase;

final class HuaweiTest extends TestCase
{
    public function testCreate()
    {
        $this->assertNotNull(Huawei::create());
    }

    public function testGetSetBadges()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setBadges(5));
        $this->assertSame(5, $huawei->getBadges());
    }

    public function testGetSetBanner()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setBanner('http://example.com/banner.png'));
        $this->assertSame('http://example.com/banner.png', $huawei->getBanner());
    }

    public function testGetSetCustomIcon()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setCustomIcon('http://example.com/image.png'));
        $this->assertSame('http://example.com/image.png', $huawei->getCustomIcon());
    }

    public function testGetSetGcmTtl()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setGcmTtl(3600));
        $this->assertSame(3600, $huawei->getGcmTtl());
    }

    public function testGetSetGroupId()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setGroupId('test_group'));
        $this->assertSame('test_group', $huawei->getGroupId());
    }

    public function testGetSetHeader()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setHeader('Header'));
        $this->assertSame('Header', $huawei->getHeader());
    }

    public function testGetSetIbc()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setIbc('#AA9966'));
        $this->assertSame('#AA9966', $huawei->getIbc());
    }

    public function testGetSetIcon()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setIcon('icon'));
        $this->assertSame('icon', $huawei->getIcon());
    }

    public function testGetSetLed()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setLed('#4455cc'));
        $this->assertSame('#4455cc', $huawei->getLed());
    }

    public function testGetSetPriority()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setPriority(-1));
        $this->assertSame(-1, $huawei->getPriority());
    }

    public function testGetSetRootParams()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setRootParams(['key' => 'value']));
        $this->assertSame(['key' => 'value'], $huawei->getRootParams());
    }

    public function testGetSetSound()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setSound('push.mp3'));
        $this->assertSame('push.mp3', $huawei->getSound());
    }

    public function testIsSetVibration()
    {
        $huawei = new Huawei();
        $this->assertSame($huawei, $huawei->setVibration(true));
        $this->assertTrue($huawei->isVibration());
    }

    public function testJsonSerialize()
    {
        $array = Huawei::create()
            ->setBanner('http://example.com/banner.png')
            ->setBadges(5)
            ->setCustomIcon('http://example.com/image.png')
            ->setGcmTtl(3600)
            ->setGroupId('test_group')
            ->setHeader('Header')
            ->setIbc('#AA9966')
            ->setIcon('icon')
            ->setLed('#4455cc')
            ->setPriority(-1)
            ->setRootParams(['key' => 'value'])
            ->setSound('push.mp3')
            ->setVibration(true)
            ->jsonSerialize();

        $this->assertCount(12, $array);
        $this->assertSame('http://example.com/banner.png', $array['huawei_android_banner']);
        $this->assertSame(5, $array['huawei_android_badges']);
        $this->assertSame('http://example.com/image.png', $array['huawei_android_custom_icon']);
        $this->assertSame(3600, $array['huawei_android_gcm_ttl']);
        $this->assertSame('test_group', $array['huawei_android_group_id']);
        $this->assertSame('Header', $array['huawei_android_header']);
        $this->assertSame('#AA9966', $array['huawei_android_ibc']);
        $this->assertSame('icon', $array['huawei_android_icon']);
        $this->assertSame('#4455cc', $array['huawei_android_led']);
        $this->assertSame(-1, $array['huawei_android_priority']);
        $this->assertSame(['key' => 'value'], $array['huawei_android_root_params']);
        $this->assertSame('push.mp3', $array['huawei_android_sound']);
        $this->assertSame(1, $array['huawei_android_vibration']);
    }
}
