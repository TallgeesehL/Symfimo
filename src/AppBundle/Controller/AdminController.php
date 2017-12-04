<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * @Route("/administration", name="administration_index")
     */
    public function indexAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
}
