<?php
/**
 * Contains SingleRecipientType.
 */

namespace PhpEws\EWSType;

/**
 * Identifies the delegate in a delegate access scenario.
 *
 * @package php-ews\Types
 */
class SingleRecipientType extends EWSType
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
