<?php
/**
 * Definition of the BaseMoveCopyFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseMoveCopyFolderType type
 */
class BaseMoveCopyFolderType extends EWSType
{
    /**
     * ToFolderId property
     *
     * @var TargetFolderIdType
     */
    public $ToFolderId;

    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;
}
