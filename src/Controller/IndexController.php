<?php 


namespace RichardRodriguez21\SmallErp\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController 
{
    #[Route('/', name: 'index')]
    public function index(){
$x = preg_match("/^MCMP-[0-9]{10}$/", "MCP-1234567890");
        return new Response("hello small erp {$x}");
    }

}
