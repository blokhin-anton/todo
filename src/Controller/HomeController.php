<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/home", name="app_homepage")
     */
    public function home()
    {
        return new Response(
            '<html><body>Home page</body></html>'
        );
    }
}
