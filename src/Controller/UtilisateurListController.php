<?php

namespace App\Controller;

use App\Controller\BaseController;
use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;
use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use OpenApi\Annotations as OA;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * UtilisateurListController Controller
 *
 * @author Daly Ghaith <daly.ghaith@gmail.com>
 */
class UtilisateurListController extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * Get categories resources list
     *
     * Show the list of all categories
     *
     * @Rest\Get("/")
     *
     * @OA\Get(
     *     path="/pets",
     *     description="Returns all pets from the system that the user has access to",
     *     operationId="findPets",
     *     @OA\Response(
     *         response=200,
     *         description="pet response"
     *     )
     * )
     * @Rest\View(serializerGroups={"list"})
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request)
    {
        $utilisateurs = $this->em->getRepository(Utilisateur::class)->findAll();

        return $this->jsonResponse(
            Response::HTTP_OK,
            'Utilisateurs list get success',
            [
                'utilisateurs' => $utilisateurs
            ]
        );
    }
}