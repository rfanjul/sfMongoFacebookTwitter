<?php
// src/MyProject/MyBundle/Document/User.php

namespace Quorra\CoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
 /**
  * @MongoDB\Id
  */
  protected $id;   

  /**
   * @var @MongoDB\string
   */
  protected $username;

  /**
   * @var @MongoDB\string
   */
	protected $firstname;

  /**
   * @var @MongoDB\string
   */	
	protected $middle_name;

  /**
   * @var @MongoDB\string
   */	
	protected $lastname;
	
	/**
   * @var @MongoDB\string
   */	
	protected $email;
	
	/**
   * @var @MongoDB\string
   */	
	protected $birthday;
	
	/**
   * @var @MongoDB\string
   */	
	protected $hometown;
	
	/**
   * @var @MongoDB\string
   */	
	protected $location;
	
	/**
   * @var @MongoDB\string
   */	
	protected $gender;
	
	/**
   * @var @MongoDB\string
   */	
	protected $languages;
	
	/**
   * @var @MongoDB\int
   */
	protected $facebookId;
	
	public function serialize()
	{
	    return serialize(array($this->facebookId, parent::serialize()));
	}

	public function unserialize($data)
	{
	    list($this->facebookId, $parentData) = unserialize($data);
	    parent::unserialize($parentData);
	}



	/**
	 * @return string
	 */
	public function getFirstname()
	{
	    return $this->firstname;
	}

	/**
	 * @param string $firstname
	 */
	public function setFirstname($firstname)
	{
	    $this->firstname = $firstname;
	}

	/**
	 * @return string
	 */
	public function getLastname()
	{
	    return $this->lastname;
	}

	/**
	 * @param string $lastname
	 */
	public function setLastname($lastname)
	{
	    $this->lastname = $lastname;
	}

	/**
	 * Get the full name of the user (first + last name)
	 * @return string
	 */
	public function getFullName()
	{
	    return $this->getFirstName() . ' ' . $this->getLastname();
	}

	/**
	 * @param string $facebookId
	 * @return void
	 */
	public function setFacebookId($facebookId)
	{
	    $this->facebookId = $facebookId;
	    $this->setUsername($facebookId);
	    $this->salt = '';
	}

	/**
	 * @return string
	 */
	public function getFacebookId()
	{
	    return $this->facebookId;
	}

	/**
	 * @param Array
	 */
	public function setFBData($fbdata)
	{
	    if (isset($fbdata['id'])) {
	        $this->setFacebookId($fbdata['id']);
	        $this->addRole('ROLE_FACEBOOK');
	    }
			if (isset($fbdata['username'])) {
        $this->setUsername( $fbdata['username'] );
      }		
	    if (isset($fbdata['first_name'])) {
	        $this->setFirstname($fbdata['first_name']);
	    }
	    if (isset($fbdata['middle_name'])) {
	        $this->setMiddleName($fbdata['middle_name']);
	    }
	    if (isset($fbdata['last_name'])) {
	        $this->setLastname($fbdata['last_name']);
	    }
	    if (isset($fbdata['email'])) {
	        $this->setEmail($fbdata['email']);
	    }
	    if (isset($fbdata['birthday'])) {
	        $this->setBirthday($fbdata['birthday']);
	    }	
	    if (isset($fbdata['hometown']['name'])) {
	        $this->setHometown($fbdata['hometown']['name']);
	    }
	    if (isset($fbdata['location']['name'])) {
	        $this->setLocation($fbdata['location']['name']);
	    }
			if (isset($fbdata['gender'])) {
	        $this->setGender($fbdata['gender']);
	    }
			if (isset($fbdata['languages'])) {
        $this->setLanguages(json_encode($fbdata['languages']));
      } 
	}

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string $username
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set middle_name
     *
     * @param string $middleName
     */
    public function setMiddleName($middleName)
    {
        $this->middle_name = $middleName;
    }

    /**
     * Get middle_name
     *
     * @return string $middleName
     */
    public function getMiddleName()
    {
        return $this->middle_name;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set birthday
     *
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return string $birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set hometown
     *
     * @param string $hometown
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;
    }

    /**
     * Get hometown
     *
     * @return string $hometown
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * Set location
     *
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * Get location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set gender
     *
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return string $gender
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set languages
     *
     * @param string $languages
     */
    public function setLanguages($languages)
    {
        $this->languages = $languages;
    }

    /**
     * Get languages
     *
     * @return string $languages
     */
    public function getLanguages()
    {
        return $this->languages;
    }
}
