<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 18.01.18
 * Time: 20:57
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhonebookController extends AbstractController
{

    /**
     * @Route("/" , name="home")
     */
    public function homepage(){
        $records = array(
            "first we get a string",
            "and then the other one"
        );
        return $this->render("list/show.html.twig",[
           'records' => $records,
        ]);
    }
}