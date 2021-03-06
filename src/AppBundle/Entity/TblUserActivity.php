<?php

namespace AppBundle\Entity;

/**
 * TblUserActivity
 */
class TblUserActivity
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
    private $tId;

    /**
     * @var string
     */
    private $tDate;

    /**
     * @var string
     */
    private $tText;

    /**
     * @var string
     */
    private $tUserIdentifier;

    /**
     * @var string
     */
    private $tUserDisplayname;

    /**
     * @var string
     */
    private $tUserProfileurl;

    /**
     * @var string
     */
    private $tUserPhotourl;

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
     * @return TblUserActivity
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
     * Set tId
     *
     * @param string $tId
     *
     * @return TblUserActivity
     */
    public function setTId($tId)
    {
        $this->tId = $tId;

        return $this;
    }

    /**
     * Get tId
     *
     * @return string
     */
    public function getTId()
    {
        return $this->tId;
    }

    /**
     * Set tDate
     *
     * @param string $tDate
     *
     * @return TblUserActivity
     */
    public function setTDate($tDate)
    {
        $this->tDate = $tDate;

        return $this;
    }

    /**
     * Get tDate
     *
     * @return string
     */
    public function getTDate()
    {
        return $this->tDate;
    }

    /**
     * Set tText
     *
     * @param string $tText
     *
     * @return TblUserActivity
     */
    public function setTText($tText)
    {
        $this->tText = $tText;

        return $this;
    }

    /**
     * Get tText
     *
     * @return string
     */
    public function getTText()
    {
        return $this->tText;
    }

    /**
     * Set tUserIdentifier
     *
     * @param string $tUserIdentifier
     *
     * @return TblUserActivity
     */
    public function setTUserIdentifier($tUserIdentifier)
    {
        $this->tUserIdentifier = $tUserIdentifier;

        return $this;
    }

    /**
     * Get tUserIdentifier
     *
     * @return string
     */
    public function getTUserIdentifier()
    {
        return $this->tUserIdentifier;
    }

    /**
     * Set tUserDisplayname
     *
     * @param string $tUserDisplayname
     *
     * @return TblUserActivity
     */
    public function setTUserDisplayname($tUserDisplayname)
    {
        $this->tUserDisplayname = $tUserDisplayname;

        return $this;
    }

    /**
     * Get tUserDisplayname
     *
     * @return string
     */
    public function getTUserDisplayname()
    {
        return $this->tUserDisplayname;
    }

    /**
     * Set tUserProfileurl
     *
     * @param string $tUserProfileurl
     *
     * @return TblUserActivity
     */
    public function setTUserProfileurl($tUserProfileurl)
    {
        $this->tUserProfileurl = $tUserProfileurl;

        return $this;
    }

    /**
     * Get tUserProfileurl
     *
     * @return string
     */
    public function getTUserProfileurl()
    {
        return $this->tUserProfileurl;
    }

    /**
     * Set tUserPhotourl
     *
     * @param string $tUserPhotourl
     *
     * @return TblUserActivity
     */
    public function setTUserPhotourl($tUserPhotourl)
    {
        $this->tUserPhotourl = $tUserPhotourl;

        return $this;
    }

    /**
     * Get tUserPhotourl
     *
     * @return string
     */
    public function getTUserPhotourl()
    {
        return $this->tUserPhotourl;
    }

    /**
     * Set response
     *
     * @param string $response
     *
     * @return TblUserActivity
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

