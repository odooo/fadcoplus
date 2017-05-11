<?php

namespace FadcoBundle\Exception;

/**
 * AccessDeniedException is thrown when the account has not the required role.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class NotAuthorizedException extends \RuntimeException
{
    public function __construct($message = 'Not authorized.', \Exception $previous = null)
    {
        parent::__construct($message, 403, $previous);
    }
}
