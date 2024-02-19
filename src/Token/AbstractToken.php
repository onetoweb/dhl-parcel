<?php

namespace Onetoweb\DhlParcel\Token;

use Stringable;
use DateTime;

/**
 * Abstract Token.
 */
abstract class AbstractToken implements TokenInterface, Stringable
{
    
    public static function expiresFromTimestamp(int $timtestamp): DateTime
    {
        
    }
    
    /**
     * @param string $value
     * @param DateTime $expires
     */
    public function __construct(string $value, DateTime $expires)
    {
        $this->value = $value;
        $this->expires = $expires;
    }
    
    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    
    /**
     * @return DateTime
     */
    public function getExpires(): DateTime
    {
        return $this->expires;
    }
    
    /**
     * @return bool
     */
    public function isExpired(): bool
    {
        return ($this->expires < new DateTime());
    }
    
    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->value;
    }
}
