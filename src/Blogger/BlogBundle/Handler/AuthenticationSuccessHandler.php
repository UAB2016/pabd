<?php
class AuthenticationSuccessHandler extends DefaultAuthenticationSuccessHandler
{
    protected $container;
    
    public function __construct(HttpUtils $httpUtils, \Symfony\Component\DependencyInjection\ContainerInterface $cont, array $options)
    {
        parent::__construct($httpUtils, $options);
        $this->container=$cont;
    }
    
    public function onAuthenticationSuccess(\Symfony\Component\HttpFoundation\Request $request, \Symfony\Component\Security\Core\Authentication\Token\TokenInterface $token)
    {
        $user=$token->getUser();
        $user->setLogged(new \DateTime());
        
        $em=$this->container->get('doctrine.orm.entity_manager');
        
        $em->persist($user);
        $em->flush();
        
        return $this->httpUtils->createRedirectResponse($request, $this->determineTargetUrl($request));
    }
}