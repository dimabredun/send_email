<?php

class User
{
    private ?string $name;
    private ?string $email ;
    private ?string $deviceId;
    private int $emailsReceived = 0;

    public function __construct(string $name = '', string $email ='', string $deviceId = '')
    {
        $this->name = $name;
        $this->email = $email;
        $this->deviceId = $deviceId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;

        return $this;
    }

    public function getDeviceId(): ?string
    {
        return $this->deviceId;
    }

    public function setDeviceId(string $deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    public function getEmailsReceived(): int
    {
        return $this->emailsReceived;
    }

    public function setEmailsReceived(): void
    {
        $this->emailsReceived++;
    }

    public function validation(): bool
    {
        $userVal = new NameValidator();
        $emailVal = new EmailValidator();
        $devIdVal = new DeviceIdValidator();

        if ($userVal->isValid($this->getName()) &&
            $emailVal->isValid($this->getEmail()) &&
            $devIdVal->isValid($this->getDeviceId()) &&
            $this->getEmailsReceived() < 1
        )
        {
            return true;
        }

        return false;
    }
}
