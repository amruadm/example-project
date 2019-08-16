<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as FOSRest;

/**
 * CRUD Контроллер
 */
class ArticleCrudController extends AbstractController {

	/**
	 * @FOSRest\Get(path="/api/v1/article/list/{page}")
	 *
	 * @param int $page Номер страницы.
	 *
	 * @return Response
	 */
	public function list(int $page): Response {

	}

	/**
	 * @FOSRest\Get(path="/api/v1/article/get/{id}")
	 *
	 * @param Article $article Статья.
	 *
	 * @return Response
	 */
	public function get(Article $article): Response {

	}

	/**
	 * @FOSRest\Post(path="/api/v1/article/create")
	 *
	 * @param Article $article
	 *
	 * @return Response
	 */
	public function create(Article $article): Response {

	}

	/**
	 * @FOSRest\Put(path="/api/v1/article/update")
	 *
	 * @param Article $article
	 *
	 * @return Response
	 */
	public function update(Article $article): Response {

	}

	/**
	 * @FOSRest\Delete(path="/api/v1/article/delete")
	 *
	 * @param Article $article
	 *
	 * @return Response
	 */
	public function delete(Article $article): Response {

	}
}
