<?php

class Newsletter implements Sender
{
    public function send(): string
    {
        $repo = new UserRepository();
        $users = $repo->getUsers();

        foreach ($users as $user) {
            if ($user->validation()) {
                $email = new Email(
                    Email::FROM,
                    $user->getEmail(),
                    'Test',
                    'This is test case',
                );

                $user->setEmailsReceived();

                return "Email $email->subject has been sent to user $user->name ". $this->notify("
Push notification has been sent to user $user->name with device_id '$user->deviceId'");
            }
        }

        return 'Sender failed';
    }

    public function notify($push): string
    {
        return $push;
    }
}