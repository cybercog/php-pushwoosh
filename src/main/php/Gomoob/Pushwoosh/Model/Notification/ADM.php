<?php

/**
 * gomoob/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, GOMOOB SARL (http://gomoob.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Gomoob\Pushwoosh\Model\Notification;

/**
 * Class which represents specific Pushwoosh notification informations for Amazon Device Messaging.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@gomoob.com)
 * @see    https://developer.amazon.com/appsandservices/apis/engage/device-messaging
 */
class ADM implements \JsonSerializable
{
    private $banner;
    private $customIcon;
    private $header;
    private $icon;
    
    /**
     * The priority of the push in the Amazon push drawer, valid values are -2, -1, 0, 1 and 2.
     *
     * @var int
     */
    private $priority;
    
    private $rootParams;
    private $sound;
    private $ttl;

    /**
     * Utility function used to create a new ADM instance.
     *
     * @return \Gomoob\Pushwoosh\Model\Notification\ADM the new created instance.
     */
    public static function create()
    {
        return new ADM();

    }

    public function getBanner()
    {
        return $this->banner;

    }

    public function getCustomIcon()
    {
        return $this->customIcon;

    }

    public function getHeader()
    {
        return $this->header;

    }

    public function getIcon()
    {
        return $this->icon;

    }
    
    /**
     * Gets the priority of the push in the Amazon push drawer, valid values are -2, -1, 0, 1 and 2.
     *
     * @return int The priority of the push in the Amazon push drawer.
     */
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

    public function getTtl()
    {
        return $this->ttl;

    }
    
    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): mixed
    {
        $json = [];
    
        isset($this->banner) ? $json['adm_banner'] = $this->banner : false;
        isset($this->customIcon) ? $json['adm_custom_icon'] = $this->customIcon : false;
        isset($this->header) ? $json['adm_header'] = $this->header : false;
        isset($this->icon) ? $json['adm_icon'] = $this->icon : false;
        isset($this->priority) ? $json['adm_priority'] = $this->priority : false;
        isset($this->rootParams) ? $json['adm_root_params'] = $this->rootParams : false;
        isset($this->sound) ? $json['adm_sound'] = $this->sound : false;
        isset($this->ttl) ? $json['adm_ttl'] = $this->ttl : false;
    
        return $json;
    
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

    public function setHeader($header)
    {
        $this->header = $header;

        return $this;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }
    
    /**
     * Sets the priority of the push in the Amazon push drawer, valid values are -2, -1, 0, 1 and 2.
     *
     * @param int $priority The priority of the push in the Amazon push drawer.
     *
     * @return \Gomoob\Pushwoosh\Model\Notification\ADM this instance.
     */
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

    public function setTtl($ttl)
    {
        $this->ttl = $ttl;

        return $this;
    }
}
