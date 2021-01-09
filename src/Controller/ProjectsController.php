<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api", name="api_")
 */
class ProjectsController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/projects")
     *
     * @param ProjectRepository $projectRepository
     *
     * @return Response
     */
    public function listAction(ProjectRepository $projectRepository): Response
    {
        $movies = $projectRepository->findall();

        return $this->handleView($this->view($movies));
    }
}