<?php
/**
 * Definition of the SyncFolderHierarchyType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SyncFolderHierarchyType type
 */
class SyncFolderHierarchyType extends EWSType
{
    /**
     * FolderShape property
     *
     * @var FolderResponseShapeType
     */
    public $FolderShape;

    /**
     * SyncFolderId property
     *
     * @var TargetFolderIdType
     */
    public $SyncFolderId;

    /**
     * SyncState property
     *
     * @var string
     */
    public $SyncState;
}
