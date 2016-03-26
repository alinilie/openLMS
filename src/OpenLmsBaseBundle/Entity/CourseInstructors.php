<?php

namespace OpenLmsBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CourseInstructors
 *
 * @ORM\Table(name="course_instructors")
 * @ORM\Entity(repositoryClass="OpenLmsBaseBundle\Repository\CourseInstructorsRepository")
 */
class CourseInstructors
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email_address", type="string", length=255)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="homepage_slug", type="string", length=255)
     */
    private $homepageSlug;

    /**
     * @var enum_status
     *
     * @ORM\Column(name="status", type="enum_status")
     */
    private $status;

    /**
     * @var
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var
     *
     * @ORM\Column(name="modified", type="datetime")
     */
    private $modified;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return CourseInstructor
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return CourseInstructor
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return CourseInstructor
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set homepageSlug
     *
     * @param string $homepageSlug
     *
     * @return CourseInstructor
     */
    public function setHomepageSlug($homepageSlug)
    {
        $this->homepageSlug = $homepageSlug;

        return $this;
    }

    /**
     * Get homepageSlug
     *
     * @return string
     */
    public function getHomepageSlug()
    {
        return $this->homepageSlug;
    }

    /**
     * Set status
     *
     * @param enum_status $status
     *
     * @return CourseInstructor
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return enum_status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return CourseInstructor
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Get modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }
}

