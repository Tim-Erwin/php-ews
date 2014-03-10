<?php
/**
 * Contains AlternatePublicFolderIdType.
 */

namespace PhpEws\EWSType;

/**
 * Describes a public folder identifier to convert to another identifier format.
 *
 * @package php-ews\Types
 */
class AlternatePublicFolderIdType extends EWSType
{
    /**
     * Contains the public folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $FolderId;

    /**
     * Identifies the format that describes the public folder identifier to
     * convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_IdFormatType
     */
    public $Format;
}
