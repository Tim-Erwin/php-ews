<?php
/**
 * Definition of the SyncFolderHierarchyCreateOrUpdateType type
 */

namespace PhpEws\EWSType;

/**
 * Definition of the SyncFolderHierarchyCreateOrUpdateType type
 */
class SyncFolderHierarchyCreateOrUpdateType extends EWSType
{
    /**
     * Folder property
     *
     * @var FolderType
     */
    public $Folder;

    /**
     * CalendarFolder property
     *
     * @var CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * ContactsFolder property
     *
     * @var ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * SearchFolder property
     *
     * @var SearchFolderType
     */
    public $SearchFolder;

    /**
     * TasksFolder property
     *
     * @var TasksFolderType
     */
    public $TasksFolder;
}
