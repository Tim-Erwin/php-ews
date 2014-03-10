<?php
/**
 * Contains EmailAddressDictionaryType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a collection of e-mail addresses for a contact.
 *
 * @package php-ews\Types
 */
class EmailAddressDictionaryType extends EWSType
{
    /**
     * Represents a single e-mail address for a contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EmailAddressDictionaryEntryType
     */
    public $Entry;
}
