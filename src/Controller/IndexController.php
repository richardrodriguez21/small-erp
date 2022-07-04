<?php 


namespace RichardRodriguez21\SmallErp\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController 
{
    #[Route('/', name: 'index')]
    public function index(){
        return new Response('hello small erp');
    }

}
