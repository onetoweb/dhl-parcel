<?php

namespace Onetoweb\DhlParcel\Token;

use DateTime;

/**
 * Token Interface.
 */
interface TokenInterface
{
    public function getValue(): string;
    
    public function getExpires(): DateTime;
    
    public function isExpired(): bool;
}
