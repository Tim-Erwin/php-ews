<?php
/**
 * Definition of the SendItemType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SendItemType type
 */
class SendItemType extends EWSType
{
    /**
     * ItemIds property
     *
     * @var NonEmptyArrayOfBaseItemIdsType
     */
    public $ItemIds;

    /**
     * SavedItemFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SavedItemFolderId;

    /**
     * SaveItemToFolder property
     *
     * @var boolean
     */
    public $SaveItemToFolder;
}
