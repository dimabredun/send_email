<?php

/**
 * In future this interface might be useful for other variations of sending data to users
 */
interface Sender
{
    public function send(): string;

    public function notify($push): string;
}