<?php
/**
 * Definition of the CreateManagedFolderRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the CreateManagedFolderRequestType type
 */
class CreateManagedFolderRequestType extends EWSType
{
    /**
     * FolderNames property
     *
     * @var NonEmptyArrayOfFolderNamesType
     */
    public $FolderNames;

    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
