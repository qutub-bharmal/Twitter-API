<?php

namespace AppBundle\Entity;

/**
 * TblFollowers
 */
class TblFollowers
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
    private $fId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $screenName;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $protected;

    /**
     * @var string
     */
    private $followersCount;

    /**
     * @var string
     */
    private $friendsCount;

    /**
     * @var string
     */
    private $listedCount;

    /**
     * @var string
     */
    private $createdAt;

    /**
     * @var string
     */
    private $favouritesCount;

    /**
     * @var string
     */
    private $utcOffset;

    /**
     * @var string
     */
    private $timeZone;

    /**
     * @var string
     */
    private $geoEnabled;

    /**
     * @var string
     */
    private $verified;

    /**
     * @var string
     */
    private $statusesCount;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var string
     */
    private $contributorsEnabled;

    /**
     * @var string
     */
    private $isTranslator;

    /**
     * @var string
     */
    private $isTranslationEnabled;

    /**
     * @var string
     */
    private $profileBackgroundColor;

    /**
     * @var string
     */
    private $profileBackgroundImageUrl;

    /**
     * @var string
     */
    private $profileBackgroundImageUrlHttps;

    /**
     * @var string
     */
    private $profileBannerUrl;

    /**
     * @var string
     */
    private $profileBackgroundTile;

    /**
     * @var string
     */
    private $profileImageUrl;

    /**
     * @var string
     */
    private $profileImageUrlHttps;

    /**
     * @var string
     */
    private $profileSidebarBorderColor;

    /**
     * @var string
     */
    private $profileSidebarFillColor;

    /**
     * @var string
     */
    private $profileTextColor;

    /**
     * @var string
     */
    private $profileUseBackgroundImage;

    /**
     * @var string
     */
    private $hasExtendedProfile;

    /**
     * @var string
     */
    private $defaultProfile;

    /**
     * @var string
     */
    private $defaultProfileImage;

    /**
     * @var string
     */
    private $following;

    /**
     * @var string
     */
    private $liveFollowing;

    /**
     * @var string
     */
    private $followRequestSent;

    /**
     * @var string
     */
    private $notifications;

    /**
     * @var string
     */
    private $muting;

    /**
     * @var string
     */
    private $blocking;

    /**
     * @var string
     */
    private $blockedBy;

    /**
     * @var string
     */
    private $translatorType;

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
     * @return TblFollowers
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
     * Set fId
     *
     * @param string $fId
     *
     * @return TblFollowers
     */
    public function setFId($fId)
    {
        $this->fId = $fId;

        return $this;
    }

    /**
     * Get fId
     *
     * @return string
     */
    public function getFId()
    {
        return $this->fId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return TblFollowers
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set screenName
     *
     * @param string $screenName
     *
     * @return TblFollowers
     */
    public function setScreenName($screenName)
    {
        $this->screenName = $screenName;

        return $this;
    }

    /**
     * Get screenName
     *
     * @return string
     */
    public function getScreenName()
    {
        return $this->screenName;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return TblFollowers
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TblFollowers
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
     * Set url
     *
     * @param string $url
     *
     * @return TblFollowers
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set protected
     *
     * @param string $protected
     *
     * @return TblFollowers
     */
    public function setProtected($protected)
    {
        $this->protected = $protected;

        return $this;
    }

    /**
     * Get protected
     *
     * @return string
     */
    public function getProtected()
    {
        return $this->protected;
    }

    /**
     * Set followersCount
     *
     * @param string $followersCount
     *
     * @return TblFollowers
     */
    public function setFollowersCount($followersCount)
    {
        $this->followersCount = $followersCount;

        return $this;
    }

    /**
     * Get followersCount
     *
     * @return string
     */
    public function getFollowersCount()
    {
        return $this->followersCount;
    }

    /**
     * Set friendsCount
     *
     * @param string $friendsCount
     *
     * @return TblFollowers
     */
    public function setFriendsCount($friendsCount)
    {
        $this->friendsCount = $friendsCount;

        return $this;
    }

    /**
     * Get friendsCount
     *
     * @return string
     */
    public function getFriendsCount()
    {
        return $this->friendsCount;
    }

    /**
     * Set listedCount
     *
     * @param string $listedCount
     *
     * @return TblFollowers
     */
    public function setListedCount($listedCount)
    {
        $this->listedCount = $listedCount;

        return $this;
    }

    /**
     * Get listedCount
     *
     * @return string
     */
    public function getListedCount()
    {
        return $this->listedCount;
    }

    /**
     * Set createdAt
     *
     * @param string $createdAt
     *
     * @return TblFollowers
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set favouritesCount
     *
     * @param string $favouritesCount
     *
     * @return TblFollowers
     */
    public function setFavouritesCount($favouritesCount)
    {
        $this->favouritesCount = $favouritesCount;

        return $this;
    }

    /**
     * Get favouritesCount
     *
     * @return string
     */
    public function getFavouritesCount()
    {
        return $this->favouritesCount;
    }

    /**
     * Set utcOffset
     *
     * @param string $utcOffset
     *
     * @return TblFollowers
     */
    public function setUtcOffset($utcOffset)
    {
        $this->utcOffset = $utcOffset;

        return $this;
    }

    /**
     * Get utcOffset
     *
     * @return string
     */
    public function getUtcOffset()
    {
        return $this->utcOffset;
    }

    /**
     * Set timeZone
     *
     * @param string $timeZone
     *
     * @return TblFollowers
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * Set geoEnabled
     *
     * @param string $geoEnabled
     *
     * @return TblFollowers
     */
    public function setGeoEnabled($geoEnabled)
    {
        $this->geoEnabled = $geoEnabled;

        return $this;
    }

    /**
     * Get geoEnabled
     *
     * @return string
     */
    public function getGeoEnabled()
    {
        return $this->geoEnabled;
    }

    /**
     * Set verified
     *
     * @param string $verified
     *
     * @return TblFollowers
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;

        return $this;
    }

    /**
     * Get verified
     *
     * @return string
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set statusesCount
     *
     * @param string $statusesCount
     *
     * @return TblFollowers
     */
    public function setStatusesCount($statusesCount)
    {
        $this->statusesCount = $statusesCount;

        return $this;
    }

    /**
     * Get statusesCount
     *
     * @return string
     */
    public function getStatusesCount()
    {
        return $this->statusesCount;
    }

    /**
     * Set lang
     *
     * @param string $lang
     *
     * @return TblFollowers
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set contributorsEnabled
     *
     * @param string $contributorsEnabled
     *
     * @return TblFollowers
     */
    public function setContributorsEnabled($contributorsEnabled)
    {
        $this->contributorsEnabled = $contributorsEnabled;

        return $this;
    }

    /**
     * Get contributorsEnabled
     *
     * @return string
     */
    public function getContributorsEnabled()
    {
        return $this->contributorsEnabled;
    }

    /**
     * Set isTranslator
     *
     * @param string $isTranslator
     *
     * @return TblFollowers
     */
    public function setIsTranslator($isTranslator)
    {
        $this->isTranslator = $isTranslator;

        return $this;
    }

    /**
     * Get isTranslator
     *
     * @return string
     */
    public function getIsTranslator()
    {
        return $this->isTranslator;
    }

    /**
     * Set isTranslationEnabled
     *
     * @param string $isTranslationEnabled
     *
     * @return TblFollowers
     */
    public function setIsTranslationEnabled($isTranslationEnabled)
    {
        $this->isTranslationEnabled = $isTranslationEnabled;

        return $this;
    }

    /**
     * Get isTranslationEnabled
     *
     * @return string
     */
    public function getIsTranslationEnabled()
    {
        return $this->isTranslationEnabled;
    }

    /**
     * Set profileBackgroundColor
     *
     * @param string $profileBackgroundColor
     *
     * @return TblFollowers
     */
    public function setProfileBackgroundColor($profileBackgroundColor)
    {
        $this->profileBackgroundColor = $profileBackgroundColor;

        return $this;
    }

    /**
     * Get profileBackgroundColor
     *
     * @return string
     */
    public function getProfileBackgroundColor()
    {
        return $this->profileBackgroundColor;
    }

    /**
     * Set profileBackgroundImageUrl
     *
     * @param string $profileBackgroundImageUrl
     *
     * @return TblFollowers
     */
    public function setProfileBackgroundImageUrl($profileBackgroundImageUrl)
    {
        $this->profileBackgroundImageUrl = $profileBackgroundImageUrl;

        return $this;
    }

    /**
     * Get profileBackgroundImageUrl
     *
     * @return string
     */
    public function getProfileBackgroundImageUrl()
    {
        return $this->profileBackgroundImageUrl;
    }

    /**
     * Set profileBackgroundImageUrlHttps
     *
     * @param string $profileBackgroundImageUrlHttps
     *
     * @return TblFollowers
     */
    public function setProfileBackgroundImageUrlHttps($profileBackgroundImageUrlHttps)
    {
        $this->profileBackgroundImageUrlHttps = $profileBackgroundImageUrlHttps;

        return $this;
    }

    /**
     * Get profileBackgroundImageUrlHttps
     *
     * @return string
     */
    public function getProfileBackgroundImageUrlHttps()
    {
        return $this->profileBackgroundImageUrlHttps;
    }

    /**
     * Set profileBannerUrl
     *
     * @param string $profileBannerUrl
     *
     * @return TblFollowers
     */
    public function setProfileBannerUrl($profileBannerUrl)
    {
        $this->profileBannerUrl = $profileBannerUrl;

        return $this;
    }

    /**
     * Get profileBannerUrl
     *
     * @return string
     */
    public function getProfileBannerUrl()
    {
        return $this->profileBannerUrl;
    }

    /**
     * Set profileBackgroundTile
     *
     * @param string $profileBackgroundTile
     *
     * @return TblFollowers
     */
    public function setProfileBackgroundTile($profileBackgroundTile)
    {
        $this->profileBackgroundTile = $profileBackgroundTile;

        return $this;
    }

    /**
     * Get profileBackgroundTile
     *
     * @return string
     */
    public function getProfileBackgroundTile()
    {
        return $this->profileBackgroundTile;
    }

    /**
     * Set profileImageUrl
     *
     * @param string $profileImageUrl
     *
     * @return TblFollowers
     */
    public function setProfileImageUrl($profileImageUrl)
    {
        $this->profileImageUrl = $profileImageUrl;

        return $this;
    }

    /**
     * Get profileImageUrl
     *
     * @return string
     */
    public function getProfileImageUrl()
    {
        return $this->profileImageUrl;
    }

    /**
     * Set profileImageUrlHttps
     *
     * @param string $profileImageUrlHttps
     *
     * @return TblFollowers
     */
    public function setProfileImageUrlHttps($profileImageUrlHttps)
    {
        $this->profileImageUrlHttps = $profileImageUrlHttps;

        return $this;
    }

    /**
     * Get profileImageUrlHttps
     *
     * @return string
     */
    public function getProfileImageUrlHttps()
    {
        return $this->profileImageUrlHttps;
    }

    /**
     * Set profileSidebarBorderColor
     *
     * @param string $profileSidebarBorderColor
     *
     * @return TblFollowers
     */
    public function setProfileSidebarBorderColor($profileSidebarBorderColor)
    {
        $this->profileSidebarBorderColor = $profileSidebarBorderColor;

        return $this;
    }

    /**
     * Get profileSidebarBorderColor
     *
     * @return string
     */
    public function getProfileSidebarBorderColor()
    {
        return $this->profileSidebarBorderColor;
    }

    /**
     * Set profileSidebarFillColor
     *
     * @param string $profileSidebarFillColor
     *
     * @return TblFollowers
     */
    public function setProfileSidebarFillColor($profileSidebarFillColor)
    {
        $this->profileSidebarFillColor = $profileSidebarFillColor;

        return $this;
    }

    /**
     * Get profileSidebarFillColor
     *
     * @return string
     */
    public function getProfileSidebarFillColor()
    {
        return $this->profileSidebarFillColor;
    }

    /**
     * Set profileTextColor
     *
     * @param string $profileTextColor
     *
     * @return TblFollowers
     */
    public function setProfileTextColor($profileTextColor)
    {
        $this->profileTextColor = $profileTextColor;

        return $this;
    }

    /**
     * Get profileTextColor
     *
     * @return string
     */
    public function getProfileTextColor()
    {
        return $this->profileTextColor;
    }

    /**
     * Set profileUseBackgroundImage
     *
     * @param string $profileUseBackgroundImage
     *
     * @return TblFollowers
     */
    public function setProfileUseBackgroundImage($profileUseBackgroundImage)
    {
        $this->profileUseBackgroundImage = $profileUseBackgroundImage;

        return $this;
    }

    /**
     * Get profileUseBackgroundImage
     *
     * @return string
     */
    public function getProfileUseBackgroundImage()
    {
        return $this->profileUseBackgroundImage;
    }

    /**
     * Set hasExtendedProfile
     *
     * @param string $hasExtendedProfile
     *
     * @return TblFollowers
     */
    public function setHasExtendedProfile($hasExtendedProfile)
    {
        $this->hasExtendedProfile = $hasExtendedProfile;

        return $this;
    }

    /**
     * Get hasExtendedProfile
     *
     * @return string
     */
    public function getHasExtendedProfile()
    {
        return $this->hasExtendedProfile;
    }

    /**
     * Set defaultProfile
     *
     * @param string $defaultProfile
     *
     * @return TblFollowers
     */
    public function setDefaultProfile($defaultProfile)
    {
        $this->defaultProfile = $defaultProfile;

        return $this;
    }

    /**
     * Get defaultProfile
     *
     * @return string
     */
    public function getDefaultProfile()
    {
        return $this->defaultProfile;
    }

    /**
     * Set defaultProfileImage
     *
     * @param string $defaultProfileImage
     *
     * @return TblFollowers
     */
    public function setDefaultProfileImage($defaultProfileImage)
    {
        $this->defaultProfileImage = $defaultProfileImage;

        return $this;
    }

    /**
     * Get defaultProfileImage
     *
     * @return string
     */
    public function getDefaultProfileImage()
    {
        return $this->defaultProfileImage;
    }

    /**
     * Set following
     *
     * @param string $following
     *
     * @return TblFollowers
     */
    public function setFollowing($following)
    {
        $this->following = $following;

        return $this;
    }

    /**
     * Get following
     *
     * @return string
     */
    public function getFollowing()
    {
        return $this->following;
    }

    /**
     * Set liveFollowing
     *
     * @param string $liveFollowing
     *
     * @return TblFollowers
     */
    public function setLiveFollowing($liveFollowing)
    {
        $this->liveFollowing = $liveFollowing;

        return $this;
    }

    /**
     * Get liveFollowing
     *
     * @return string
     */
    public function getLiveFollowing()
    {
        return $this->liveFollowing;
    }

    /**
     * Set followRequestSent
     *
     * @param string $followRequestSent
     *
     * @return TblFollowers
     */
    public function setFollowRequestSent($followRequestSent)
    {
        $this->followRequestSent = $followRequestSent;

        return $this;
    }

    /**
     * Get followRequestSent
     *
     * @return string
     */
    public function getFollowRequestSent()
    {
        return $this->followRequestSent;
    }

    /**
     * Set notifications
     *
     * @param string $notifications
     *
     * @return TblFollowers
     */
    public function setNotifications($notifications)
    {
        $this->notifications = $notifications;

        return $this;
    }

    /**
     * Get notifications
     *
     * @return string
     */
    public function getNotifications()
    {
        return $this->notifications;
    }

    /**
     * Set muting
     *
     * @param string $muting
     *
     * @return TblFollowers
     */
    public function setMuting($muting)
    {
        $this->muting = $muting;

        return $this;
    }

    /**
     * Get muting
     *
     * @return string
     */
    public function getMuting()
    {
        return $this->muting;
    }

    /**
     * Set blocking
     *
     * @param string $blocking
     *
     * @return TblFollowers
     */
    public function setBlocking($blocking)
    {
        $this->blocking = $blocking;

        return $this;
    }

    /**
     * Get blocking
     *
     * @return string
     */
    public function getBlocking()
    {
        return $this->blocking;
    }

    /**
     * Set blockedBy
     *
     * @param string $blockedBy
     *
     * @return TblFollowers
     */
    public function setBlockedBy($blockedBy)
    {
        $this->blockedBy = $blockedBy;

        return $this;
    }

    /**
     * Get blockedBy
     *
     * @return string
     */
    public function getBlockedBy()
    {
        return $this->blockedBy;
    }

    /**
     * Set translatorType
     *
     * @param string $translatorType
     *
     * @return TblFollowers
     */
    public function setTranslatorType($translatorType)
    {
        $this->translatorType = $translatorType;

        return $this;
    }

    /**
     * Get translatorType
     *
     * @return string
     */
    public function getTranslatorType()
    {
        return $this->translatorType;
    }

    /**
     * Set response
     *
     * @param string $response
     *
     * @return TblFollowers
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

