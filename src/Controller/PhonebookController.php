<?php
/**
 * Created by PhpStorm.
 * User: serhiikoshelev
 * Date: 18.01.18
 * Time: 20:57
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PhonebookController
{

    /**
     * @Route("/" , name="home")
     */
    public function homepage(){
        return new Response("Hello World");
    }
}