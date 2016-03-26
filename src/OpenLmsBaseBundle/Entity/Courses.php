<?php

namespace OpenLmsBaseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Courses
 *
 * @ORM\Table(name="courses")
 * @ORM\Entity(repositoryClass="OpenLmsBaseBundle\Repository\CoursesRepository")
 */
class Courses
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="category_id", type="integer")
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="CourseInstructors")
     * @ORM\JoinColumn(name="course_instructor_id", referencedColumnName="id")
     */
    private $courseInstructor;

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
     * Set name
     *
     * @param string $name
     *
     * @return Courses
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
     * Set category
     *
     * @param integer $category
     *
     * @return Courses
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set courseInstructor
     *
     * @param integer $courseInstructor
     *
     * @return Courses
     */
    public function setCourseInstructor($courseInstructor)
    {
        $this->courseInstructor = $courseInstructor;

        return $this;
    }

    /**
     * Get courseInstructor
     *
     * @return int
     */
    public function getCourseInstructor()
    {
        return $this->courseInstructor;
    }

    /**
     * Set status
     *
     * @param enum_status $status
     *
     * @return Courses
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
}

