<?php

class NameValidator implements Validator
{
    public function isValid($string): bool
    {
        if (!empty($string)) {
            return true;
        }

        return false;
    }
}