<?php
namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pages")
 */
class Page
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** 
     * @ORM\Column(type="string")
     */
    protected $title;
    /** 
     * @ORM\Column(type="text")
     */
    protected $content;
	/**
	 * 
	 * @return mixed
	 */
	function getId() {
		return $this->id;
	}
	
	/**
	 * 
	 * @param mixed $id 
	 * @return Page
	 */
	function setId($id): self {
		$this->id = $id;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getTitle() {
		return $this->title;
	}
	
	/**
	 * 
	 * @param mixed $title 
	 * @return Page
	 */
	function setTitle($title): self {
		$this->title = $title;
		return $this;
	}
	/**
	 * 
	 * @return mixed
	 */
	function getContent() {
		return $this->content;
	}
	
	/**
	 * 
	 * @param mixed $content 
	 * @return Page
	 */
	function setContent($content): self {
		$this->content = $content;
		return $this;
	}
}
