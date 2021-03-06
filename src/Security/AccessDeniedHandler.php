<?php
 
 namespace App\Security;

 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Security\Core\Exception\AccessDeniedException;
 use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
 use Symfony\Component\HttpFoundation\RedirectResponse;
 
 
 class AccessDeniedHandler implements AccessDeniedHandlerInterface
 {
    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        // ...
       
        $content = $accessDeniedException->getMessage();
        
        return new Response($content, 403);
       
    }
 }


 