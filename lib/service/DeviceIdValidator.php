<?php

class DeviceIdValidator implements Validator
{
    public function isValid($string): bool
    {
        if (!preg_match('/[^A-Za-z0-9]/', $string) && !strlen($string) > 8 && !empty($string)) {
            return false;
        }

        return true;
    }
}