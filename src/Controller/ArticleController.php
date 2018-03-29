<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 29.03.18
 * Time: 19:51
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('page render');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response('asteroid news:     '.$slug);
    }
}