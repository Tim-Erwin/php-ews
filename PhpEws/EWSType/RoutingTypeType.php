<?php
/**
 * Contains RoutingTypeType.
 */

namespace PhpEws\EWSType;

/**
 * Represents the routing protocol for a recipient.
 *
 * @package php-ews\Enumerations
 */
class RoutingTypeType extends EWSType
{
    /**
     * Route the email using the SMTP protocol.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SMTP = 'SMTP';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
