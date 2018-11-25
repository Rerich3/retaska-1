<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/product-list")
 */
class ProductList extends AbstractController
{
    /**
     * @Route("/", name="product_list_index")
     */
    public function index(Request $request): Response
    {
        return $this->render('product_list/index.html.twig');
    }
}
