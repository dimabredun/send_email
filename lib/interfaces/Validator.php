<?php

interface Validator
{
    public function isValid($string): bool;
}