<?php

namespace Repository;

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
    public function getById(int $id)
    {
        return $this->entityManager->find('Models\Page', $id);
    }
    public function deletePage(int $id)
    {
        $page = $this->getById($id);
        $this->entityManager->remove($page);
        $this->entityManager->flush();
    }
    public function createPage(string $name)
    {
        $page = new Page();
        $page->setTitle($name);
        $page->setContent(" ");
        $this->entityManager->persist($page);
        $this->entityManager->flush();
    }
    public function editPage(int $id, string $titleName, string $content)
    {
        $page = $this->getById($id);
        $page->setTitle($titleName);
        $page->setContent($content);
        $this->entityManager->flush();
    }
}