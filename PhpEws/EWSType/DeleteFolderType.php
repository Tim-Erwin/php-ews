<?php
/**
 * Definition of the DeleteFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DeleteFolderType type
 */
class DeleteFolderType extends EWSType
{
    /**
     * FolderIds property
     *
     * @var NonEmptyArrayOfBaseFolderIdsType
     */
    public $FolderIds;

    /**
     * DeleteType property
     *
     * @var DisposalType
     */
    public $DeleteType;
}
