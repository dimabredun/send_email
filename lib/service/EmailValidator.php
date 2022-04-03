<?php

class EmailValidator implements Validator
{
    public function isValid($string): bool
    {
        if (!filter_var($string, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }
}