<?php

namespace FadcoBundle\Twig\Extension;

use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;

class IsGrantedRoleExtension extends \Twig_Extension
{    
    /**
     * @var RoleHierarchyInterfacee $roleHierarchy
     */
    protected  $roleHierarchy;

    public function __construct(RoleHierarchyInterface $roleHierarchy)
    {
        $this->roleHierarchy = $roleHierarchy;
    }

    public function getFunctions()
    {
        return array(
            'isGrantedRole' => new \Twig_Function_Method($this, 'isGrantedRole'),
        );
    }
        /**
         * isGrantedRole
         *
         * @param string $role
         * @param $user
         * @return bool
         */
    public function isGrantedRole($role, $user)
    {

        $role = new Role($role);

        foreach($user->getRoles() as $userRole) {
            if (in_array($role, $this->roleHierarchy->getReachableRoles(array(new Role($userRole)))))
                return true;
        }

        return false;
    }


    public function getName()
    {
        return 'isgrantedrole_extension';
    }
}

