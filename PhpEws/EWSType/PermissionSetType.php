<?php
/**
 * Definition of the PermissionSetType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the PermissionSetType type
 */
class PermissionSetType extends EWSType
{
    /**
     * Permissions property
     *
     * @var ArrayOfPermissionsType
     */
    public $Permissions;

    /**
     * UnknownEntries property
     *
     * @var ArrayOfUnknownEntriesType
     */
    public $UnknownEntries;
}
