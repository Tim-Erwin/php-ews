<?php
/**
 * Definition of the SyncFolderHierarchyChangesType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SyncFolderHierarchyChangesType type
 */
class SyncFolderHierarchyChangesType extends EWSType
{
    /**
     * Create property
     *
     * @var SyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;

    /**
     * Update property
     *
     * @var SyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;

    /**
     * Delete property
     *
     * @var SyncFolderHierarchyDeleteType
     */
    public $Delete;
}
