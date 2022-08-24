<?php

namespace Gomoob\Pushwoosh\Model\Notification;

final class Huawei implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $badges;

    /**
     * @var string|null
     */
    private $banner;

    /**
     * @var string|null
     */
    private $customIcon;

    /**
     * @var int|null
     */
    private $gcmTtl;

    /**
     * @var string|null
     */
    private $header;

    /**
     * @var string|null
     */
    private $ibc;

    /**
     * @var string|null
     */
    private $icon;

    /**
     * @var string|null
     */
    private $led;

    /**
     * @var int|null
     */
    private $priority;

    /**
     * @var array|null
     */
    private $rootParams;

    /**
     * @var string|null
     */
    private $sound;

    /**
     * @var boolean
     */
    private $vibration;

    public static function create()
    {
        return new self();
    }

    public function getBadges()
    {
        return $this->badges;
    }

    public function getBanner()
    {
        return $this->banner;
    }

    public function getCustomIcon()
    {
        return $this->customIcon;
    }

    public function getGcmTtl()
    {
        return $this->gcmTtl;
    }

    public function getHeader()
    {
        return $this->header;
    }

    public function getIbc()
    {
        return $this->ibc;
    }

    public function getIcon()
    {
        return $this->icon;
    }

    public function getLed()
    {
        return $this->led;
    }

    public function getPriority()
    {
        return $this->priority;
    }

    public function getRootParams()
    {
        return $this->rootParams;
    }

    public function getSound()
    {
        return $this->sound;
    }

    public function isVibration()
    {
        return $this->vibration;
    }

    public function jsonSerialize()
    {
        $json = [];

        if ($this->badges !== null) {
            $json['huawei_android_badges'] = $this->badges;
        }

        if ($this->banner !== null) {
            $json['huawei_android_banner'] = $this->banner;
        }

        if ($this->customIcon !== null) {
            $json['huawei_android_custom_icon'] = $this->customIcon;
        }

        if ($this->gcmTtl !== null) {
            $json['huawei_android_gcm_ttl'] = $this->gcmTtl;
        }

        if ($this->header !== null) {
            $json['huawei_android_header'] = $this->header;
        }

        if ($this->ibc !== null) {
            $json['huawei_android_ibc'] = $this->ibc;
        }

        if ($this->icon !== null) {
            $json['huawei_android_icon'] = $this->icon;
        }

        if ($this->led !== null) {
            $json['huawei_android_led'] = $this->led;
        }

        if ($this->priority !== null) {
            $json['huawei_android_priority'] = $this->priority;
        }

        if ($this->rootParams !== null) {
            $json['huawei_android_root_params'] = $this->rootParams;
        }

        if ($this->sound !== null) {
            $json['huawei_android_sound'] = $this->sound;
        }

        if ($this->vibration !== null) {
            $json['huawei_android_vibration'] = $this->vibration ? 1 : 0;
        }

        return $json;
    }

    public function setBadges($badges)
    {
        $this->badges = $badges;

        return $this;
    }

    public function setBanner($banner)
    {
        $this->banner = $banner;

        return $this;
    }

    public function setCustomIcon($customIcon)
    {
        $this->customIcon = $customIcon;

        return $this;
    }

    public function setGcmTtl($gcmTtl)
    {
        $this->gcmTtl = $gcmTtl;

        return $this;
    }

    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }

    public function setIbc($ibc)
    {
        $this->ibc = $ibc;

        return $this;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    public function setLed($led)
    {
        $this->led = $led;

        return $this;
    }

    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    public function setRootParams($rootParams)
    {
        $this->rootParams = $rootParams;

        return $this;
    }

    public function setSound($sound)
    {
        $this->sound = $sound;

        return $this;
    }

    public function setVibration($vibration)
    {
        $this->vibration = $vibration;

        return $this;
    }
}
