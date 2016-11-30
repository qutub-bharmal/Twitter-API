<?php

namespace AppBundle\Entity;

//use Doctrine\ORM\Mapping as ORM;

/**
 * TblUsers
 */
class TblUsers
{
    /**
     * @var integer
     */
    private $id;

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
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $language;

    /**
     * @var string
     */
    private $age;

    /**
     * @var string
     */
    private $birthday;

    /**
     * @var string
     */
    private $birthmonth;

    /**
     * @var string
     */
    private $birthyear;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $emailverified;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $jobTitle;

    /**
     * @var string
     */
    private $organizationName;

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
     * Set identifier
     *
     * @param string $identifier
     *
     * @return TblUsers
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
     * @return TblUsers
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
     * @return TblUsers
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
     * @return TblUsers
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
     * @return TblUsers
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
     * @return TblUsers
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return TblUsers
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return TblUsers
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return TblUsers
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return TblUsers
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return TblUsers
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set birthday
     *
     * @param string $birthday
     *
     * @return TblUsers
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set birthmonth
     *
     * @param string $birthmonth
     *
     * @return TblUsers
     */
    public function setBirthmonth($birthmonth)
    {
        $this->birthmonth = $birthmonth;

        return $this;
    }

    /**
     * Get birthmonth
     *
     * @return string
     */
    public function getBirthmonth()
    {
        return $this->birthmonth;
    }

    /**
     * Set birthyear
     *
     * @param string $birthyear
     *
     * @return TblUsers
     */
    public function setBirthyear($birthyear)
    {
        $this->birthyear = $birthyear;

        return $this;
    }

    /**
     * Get birthyear
     *
     * @return string
     */
    public function getBirthyear()
    {
        return $this->birthyear;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return TblUsers
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
     * Set emailverified
     *
     * @param string $emailverified
     *
     * @return TblUsers
     */
    public function setEmailverified($emailverified)
    {
        $this->emailverified = $emailverified;

        return $this;
    }

    /**
     * Get emailverified
     *
     * @return string
     */
    public function getEmailverified()
    {
        return $this->emailverified;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return TblUsers
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return TblUsers
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return TblUsers
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return TblUsers
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return TblUsers
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return TblUsers
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set jobTitle
     *
     * @param string $jobTitle
     *
     * @return TblUsers
     */
    public function setJobTitle($jobTitle)
    {
        $this->jobTitle = $jobTitle;

        return $this;
    }

    /**
     * Get jobTitle
     *
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Set organizationName
     *
     * @param string $organizationName
     *
     * @return TblUsers
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;

        return $this;
    }

    /**
     * Get organizationName
     *
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * Set response
     *
     * @param string $response
     *
     * @return TblUsers
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
     * Set followersCount
     *
     * @param string $followersCount
     *
     * @return TblUsers
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
     * @return TblUsers
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
     * @return TblUsers
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
}
