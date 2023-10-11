<?php

/**
 * gomoob/php-pushwoosh
 *
 * @copyright Copyright (c) 2014, GOMOOB SARL (http://gomoob.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE.md file)
 */
namespace Gomoob\Pushwoosh\Model\Notification;

/**
 * Class which represents specific Pushwoosh notification informations for Safari.
 *
 * @author Baptiste GAILLARD (baptiste.gaillard@gomoob.com)
 */
class Safari implements \JsonSerializable
{
    private $action;
    private $title;
    private $ttl;
    private $urlArgs;

    /**
     * Utility function used to create a new Safari instance.
     *
     * @return \Gomoob\Pushwoosh\Model\Notification\Safari the new created instance.
     */
    public static function create()
    {
        return new Safari();
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getTtl()
    {
        return $this->ttl;
    }

    public function getUrlArgs()
    {
        return $this->urlArgs;
    }
    
    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): mixed
    {
        $json = [];
    
        isset($this->action) ? $json['safari_action'] = $this->action : false;
        isset($this->title) ? $json['safari_title'] = $this->title : false;
        isset($this->ttl) ? $json['safari_ttl'] = $this->ttl : false;
        isset($this->urlArgs) ? $json['safari_url_args'] = $this->urlArgs : false;
    
        return $json;
    
    }

    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setTtl($ttl)
    {
        $this->ttl = $ttl;

        return $this;
    }

    public function setUrlArgs(array $urlArgs)
    {
        $this->urlArgs = $urlArgs;

        return $this;
    }
}
