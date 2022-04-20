<?php

/**
 * This interface is useful for many types of validation data
 */
interface Validator
{
    public function isValid($string): bool;
}