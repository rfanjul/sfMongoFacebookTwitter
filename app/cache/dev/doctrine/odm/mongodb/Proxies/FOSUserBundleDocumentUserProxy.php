<?php

namespace Proxies;

use Doctrine\ODM\MongoDB\Persisters\DocumentPersister;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class FOSUserBundleDocumentUserProxy extends \FOS\UserBundle\Document\User implements \Doctrine\ODM\MongoDB\Proxy\Proxy
{
    private $__documentPersister__;
    private $__identifier__;
    public $__isInitialized__ = false;
    public function __construct(DocumentPersister $documentPersister, $identifier)
    {
        $this->__documentPersister__ = $documentPersister;
        $this->__identifier__ = $identifier;
    }
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->__documentPersister__) {
            $this->__isInitialized__ = true;
            if ($this->__documentPersister__->load($this->__identifier__, $this) === null) {
                throw \Doctrine\ODM\MongoDB\MongoDBException::documentNotFound(get_class($this), $this->__identifier__);
            }
            unset($this->__documentPersister__, $this->__identifier__);
        }
    }

    
    public function addRole($role)
    {
        $this->__load();
        return parent::addRole($role);
    }

    public function equals(\Symfony\Component\Security\Core\User\UserInterface $user)
    {
        $this->__load();
        return parent::equals($user);
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function getUsernameCanonical()
    {
        $this->__load();
        return parent::getUsernameCanonical();
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function getEmailCanonical()
    {
        $this->__load();
        return parent::getEmailCanonical();
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function getPlainPassword()
    {
        $this->__load();
        return parent::getPlainPassword();
    }

    public function getLastLogin()
    {
        $this->__load();
        return parent::getLastLogin();
    }

    public function getConfirmationToken()
    {
        $this->__load();
        return parent::getConfirmationToken();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function hasRole($role)
    {
        $this->__load();
        return parent::hasRole($role);
    }

    public function isAccountNonExpired()
    {
        $this->__load();
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        $this->__load();
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        $this->__load();
        return parent::isCredentialsNonExpired();
    }

    public function isCredentialsExpired()
    {
        $this->__load();
        return parent::isCredentialsExpired();
    }

    public function isEnabled()
    {
        $this->__load();
        return parent::isEnabled();
    }

    public function isExpired()
    {
        $this->__load();
        return parent::isExpired();
    }

    public function isLocked()
    {
        $this->__load();
        return parent::isLocked();
    }

    public function isSuperAdmin()
    {
        $this->__load();
        return parent::isSuperAdmin();
    }

    public function isUser(\FOS\UserBundle\Model\UserInterface $user = NULL)
    {
        $this->__load();
        return parent::isUser($user);
    }

    public function removeRole($role)
    {
        $this->__load();
        return parent::removeRole($role);
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function setUsernameCanonical($usernameCanonical)
    {
        $this->__load();
        return parent::setUsernameCanonical($usernameCanonical);
    }

    public function setCredentialsExpireAt(\DateTime $date)
    {
        $this->__load();
        return parent::setCredentialsExpireAt($date);
    }

    public function setCredentialsExpired($boolean)
    {
        $this->__load();
        return parent::setCredentialsExpired($boolean);
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function setEmailCanonical($emailCanonical)
    {
        $this->__load();
        return parent::setEmailCanonical($emailCanonical);
    }

    public function setEnabled($boolean)
    {
        $this->__load();
        return parent::setEnabled($boolean);
    }

    public function setExpired($boolean)
    {
        $this->__load();
        return parent::setExpired($boolean);
    }

    public function setExpiresAt(\DateTime $date)
    {
        $this->__load();
        return parent::setExpiresAt($date);
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function setSuperAdmin($boolean)
    {
        $this->__load();
        return parent::setSuperAdmin($boolean);
    }

    public function setPlainPassword($password)
    {
        $this->__load();
        return parent::setPlainPassword($password);
    }

    public function setLastLogin(\DateTime $time)
    {
        $this->__load();
        return parent::setLastLogin($time);
    }

    public function setLocked($boolean)
    {
        $this->__load();
        return parent::setLocked($boolean);
    }

    public function setConfirmationToken($confirmationToken)
    {
        $this->__load();
        return parent::setConfirmationToken($confirmationToken);
    }

    public function setPasswordRequestedAt(\DateTime $date)
    {
        $this->__load();
        return parent::setPasswordRequestedAt($date);
    }

    public function getPasswordRequestedAt()
    {
        $this->__load();
        return parent::getPasswordRequestedAt();
    }

    public function isPasswordRequestNonExpired($ttl)
    {
        $this->__load();
        return parent::isPasswordRequestNonExpired($ttl);
    }

    public function generateConfirmationToken()
    {
        $this->__load();
        return parent::generateConfirmationToken();
    }

    public function setRoles(array $roles)
    {
        $this->__load();
        return parent::setRoles($roles);
    }

    public function getGroups()
    {
        $this->__load();
        return parent::getGroups();
    }

    public function getGroupNames()
    {
        $this->__load();
        return parent::getGroupNames();
    }

    public function hasGroup($name)
    {
        $this->__load();
        return parent::hasGroup($name);
    }

    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->__load();
        return parent::addGroup($group);
    }

    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->__load();
        return parent::removeGroup($group);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
        return array('username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'lastLogin', 'locked', 'expired', 'expiresAt', 'confirmationToken', 'passwordRequestedAt', 'roles');
    }
}