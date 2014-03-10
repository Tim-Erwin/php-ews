<?php
/**
 * Contains NonEmptyArrayOfAttachmentsType.
 */

namespace PhpEws\EWSType;

/**
 * Contains the items or files that are attached to an item in the Exchange
 * store.
 *
 * @package php-ews\Types
 */
class NonEmptyArrayOfAttachmentsType extends EWSType
{
    /**
     * Represents an Exchange item that is attached to another Exchange item.
     *
     * @since Exchange 2007
     *
     * @var ItemAttachmentType
     */
    public $ItemAttachment;

    /**
     * Represents a file that is attached to an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var FileAttachmentType
     */
    public $FileAttachment;
}
