<?php
/**
 * Contains MemberListType.
 */

namespace PhpEws\EWSType;

/**
 * Represents the list of members for a distribution list.
 *
 * @package php-ews\Types
 */
class MemberListType extends EWSType
{
    /**
     * Provides an identifier for a fully resolved e-mail address, and the
     * status of that address on the server.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var EWSType_MemberType
     */
    public $Member;
}
