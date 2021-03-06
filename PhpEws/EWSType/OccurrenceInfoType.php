<?php
/**
 * Contains OccurrenceInfoType.
 */

namespace PhpEws\EWSType;

/**
 * Represents an occurrence of a recurring calendar item.
 */
class OccurrenceInfoType extends EWSType
{
    /**
     * Represents the end time of the first occurrence of a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $End;

    /**
     * Contains the unique identifier and change key of the first occurrence of
     * a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Represents the original start time of the first occurrence of a recurring
     * calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $OriginalStart;

    /**
     * Represents the start time of the first occurrence of a recurring calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;
}
