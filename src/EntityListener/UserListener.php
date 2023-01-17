<?php
namespace App\EntityListener;

use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserListener{

    private UserPasswordHasherInterface $hasher;

    public function __construct( UserPasswordHasherInterface $hasher)
    {
        $this ->hasher = $hasher;
    }

    public function prePersist($user){

    }
    public function preUpdate($user){

    }

    public function encodePassword($user){

        if($user -> getplainPassword() === null){
            return;
        }

        $user->setPassword(
            $this->hasher->hashPassword(
                $user,
                $user->getPlainPassword()
            )
            );

    }

}