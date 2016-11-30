<?php

namespace AppBundle\Entity;

/**
 * TblFollowing
 */
class TblFollowing
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $websiteurl;

    /**
     * @var string
     */
    private $profileurl;

    /**
     * @var string
     */
    private $photourl;

    /**
     * @var string
     */
    private $displayname;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $response;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return TblFollowing
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set identifier
     *
     * @param string $identifier
     *
     * @return TblFollowing
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;

        return $this;
    }

    /**
     * Get identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Set websiteurl
     *
     * @param string $websiteurl
     *
     * @return TblFollowing
     */
    public function setWebsiteurl($websiteurl)
    {
        $this->websiteurl = $websiteurl;

        return $this;
    }

    /**
     * Get websiteurl
     *
     * @return string
     */
    public function getWebsiteurl()
    {
        return $this->websiteurl;
    }

    /**
     * Set profileurl
     *
     * @param string $profileurl
     *
     * @return TblFollowing
     */
    public function setProfileurl($profileurl)
    {
        $this->profileurl = $profileurl;

        return $this;
    }

    /**
     * Get profileurl
     *
     * @return string
     */
    public function getProfileurl()
    {
        return $this->profileurl;
    }

    /**
     * Set photourl
     *
     * @param string $photourl
     *
     * @return TblFollowing
     */
    public function setPhotourl($photourl)
    {
        $this->photourl = $photourl;

        return $this;
    }

    /**
     * Get photourl
     *
     * @return string
     */
    public function getPhotourl()
    {
        return $this->photourl;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     *
     * @return TblFollowing
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;

        return $this;
    }

    /**
     * Get displayname
     *
     * @return string
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TblFollowing
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return TblFollowing
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set response
     *
     * @param string $response
     *
     * @return TblFollowing
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get response
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }
}

