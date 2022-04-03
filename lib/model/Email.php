<?php

class Email
{
    const FROM = 'sender@examile.com';

    public string $to;

    public string $subject;

    public string $text;

    public function __construct(
        string $from,
        string $to,
        string $subject,
        string $text
    ) {
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->text = $text;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function setFrom(string $from): void
    {
        $this->from = $from;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }
}