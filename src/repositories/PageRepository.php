<?php

namespace Repository;

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
}
