<?php

namespace Proxies\__CG__\Common\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Common\UserBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'accountNonExpired', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'accountNonLocked', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'creadentialsNonExpired', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'actionToken', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'registerDate', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'avatarFile', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'avatarTemp', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'updateDate');
        }

        return array('__isInitialized__', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'username', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'accountNonExpired', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'accountNonLocked', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'creadentialsNonExpired', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'actionToken', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'registerDate', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'avatar', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'avatarFile', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'avatarTemp', '' . "\0" . 'Common\\UserBundle\\Entity\\User' . "\0" . 'updateDate');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getAvatarFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatarFile', array());

        return parent::getAvatarFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatarFile(\Symfony\Component\HttpFoundation\File\UploadedFile $avatarFile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatarFile', array($avatarFile));

        return parent::setAvatarFile($avatarFile);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', array());

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', array());

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', array());

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', array());

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', array());

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', array());

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', array());

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', array());

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', array());

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', array($username));

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', array($password));

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountNonExpired($accountNonExpired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountNonExpired', array($accountNonExpired));

        return parent::setAccountNonExpired($accountNonExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountNonExpired', array());

        return parent::getAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setAccountNonLocked($accountNonLocked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAccountNonLocked', array($accountNonLocked));

        return parent::setAccountNonLocked($accountNonLocked);
    }

    /**
     * {@inheritDoc}
     */
    public function getAccountNonLocked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAccountNonLocked', array());

        return parent::getAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreadentialsNonExpired($creadentialsNonExpired)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreadentialsNonExpired', array($creadentialsNonExpired));

        return parent::setCreadentialsNonExpired($creadentialsNonExpired);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreadentialsNonExpired()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreadentialsNonExpired', array());

        return parent::getCreadentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', array($enabled));

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', array());

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles($roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', array($roles));

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function setActionToken($actionToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActionToken', array($actionToken));

        return parent::setActionToken($actionToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getActionToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActionToken', array());

        return parent::getActionToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setregisterDate($registerDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setregisterDate', array($registerDate));

        return parent::setregisterDate($registerDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getregisterDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getregisterDate', array());

        return parent::getregisterDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAvatar($avatar)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAvatar', array($avatar));

        return parent::setAvatar($avatar);
    }

    /**
     * {@inheritDoc}
     */
    public function getAvatar()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAvatar', array());

        return parent::getAvatar();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', array());

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($plainPassword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', array($plainPassword));

        return parent::setPlainPassword($plainPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', array());

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', array($serialized));

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function preSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preSave', array());

        return parent::preSave();
    }

    /**
     * {@inheritDoc}
     */
    public function postSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'postSave', array());

        return parent::postSave();
    }

}
