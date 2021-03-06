<?php
/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfAlternateIdsType type
 */
class NonEmptyArrayOfAlternateIdsType extends EWSType
{
    /**
     * AlternateId property
     *
     * @var AlternateIdType
     */
    public $AlternateId;

    /**
     * AlternatePublicFolderId property
     *
     * @var AlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;

    /**
     * AlternatePublicFolderItemId property
     *
     * @var AlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;
}
