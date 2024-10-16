<?php

namespace App\Security;

use App\Repository\UserRepository;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Http\AccessToken\AccessTokenHandlerInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;

class AccessTokenHandler implements AccessTokenHandlerInterface {
    
    public function __construct(
        private UserRepository $userRepository
    )
    {      
    }

    public function getUserBadgeFrom(string $accessToken): UserBadge
    {
        $user = $this->userRepository->findOneBy(['token' => $accessToken]);

        if ($user === null)
            throw new BadCredentialsException('Invalid credentials');
        
        return new UserBadge($user->getEmail());
    }
}