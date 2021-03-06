<?php
/**
 * Contains NumberedRecurrenceRangeType.
 */

namespace PhpEws\EWSType;

/**
 * Describes the start date and the number of occurrences of a recurring item.
 */
class NumberedRecurrenceRangeType extends EWSType
{
    /**
     * Contains the number of occurrences of a recurring item.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumberOfOccurrences;

    /**
     * Represents the start date of a recurring task or calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a date object that extends DateTime.
     */
    public $StartDate;
}
