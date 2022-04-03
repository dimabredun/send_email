<?php

class UserRepository
{
    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        $users = [];

        $user = new User();
        $user->setName('Jack')
             ->setEmail('ivan@test.com')
             ->setDeviceId('Ks[dqweer4');
        $users[] = $user;

        $user2 = new User();
        $user2->setName('Peter')
              ->setEmail('peter@test.com.com');
        $users[] = $user2;

        $user3 = new User();
        $user3->setName('Mark')
              ->setDeviceId('Ks[dqweer4');
        $users[] = $user3;

        $user4 = new User();
        $user4->setName('Nina')
              ->setEmail('...');
        $users[] = $user4;

        $user5 = new User();
        $user5->setName('Luke')
              ->setDeviceId('vfehlfg43g');
        $users[] = $user5;

        $user6 = new User('Zerg');
        $users[] = $user6;

        $user7 = new User('');
        $users[] = $user7;

        return $users;
    }
}
