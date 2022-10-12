<?php
 namespace Repository;

use Doctrine\ORM\Mapping as ORM;
use Models\Page;

class PageRepository
{
    protected $entityManager;
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }
    public function getAll()
    {
        return $this->entityManager->getRepository('Models\Page')->findAll();
    }
    public function getById($id)
    {
        return $this->entityManager->find('Models\Page', $id);
    }
    public function create(){
        $page = new Page();
        
    }
}