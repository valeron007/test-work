<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Formuls;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Flex\Response;
use function var_dump;

class FormulaController extends AbstractController
{
	/**
	 * @Route("/formula", name="formula")
	 * @param Request $request
	 * @param PaginatorInterface $paginator
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
    public function index(Request $request, PaginatorInterface $paginator)
    {
    	$manageDatabse = $this->getDoctrine()->getRepository(Formuls::class);

		$query_formuls = $manageDatabse->createQueryBuilder('f')->getQuery();
    	$page = null;
    	if(!$request->query->has('page')){
    		$page = 1;
		}else{
			$page = $request->query->getInt('page', 1);
		}
		// Paginate the results of the query
		$formuls = $paginator->paginate(
		// Doctrine Query, not results
			$query_formuls,
			// Define the page parameter
			$page,
			// Items per page
			5
		);

        return $this->render('formula/formuls.html.twig', [
            'page_name' => 'Formuls',
			'formuls' => $formuls
        ]);
    }


    public function updateFormuls(Request $request){
		$data = $request->request->all();
		$entityManager = $this->getDoctrine()->getManager();
		$formula = $entityManager->getRepository(Formuls::class)->find($data['id']);

		if (!$formula) {
			return $this->json(array(
				'page_name' => 'Formuls',
				'error' => 'Записи с таким идентификатором не существует'
			))->setStatusCode(\Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND);
		}

		if(isset($data['var_one'])){
			$formula->setVarOne($data['var_one']);
		}

		if(isset($data['var_two'])){
			$formula->setVarTwo($data['var_two']);
		}

		$entityManager->flush();

		return $this->json([
			'page_name' => 'Formuls',
			'success' => 'Запись с идентификатором ' . $formula->getId() . ' успешно обновлена!!!'
		]);
	}

}
