<?php
/**
 * Contains EndDateRecurrenceRangeType.
 */

namespace PhpEws\EWSType;

/**
 * Describes the start date and the end date of an item recurrence pattern.
 */
class EndDateRecurrenceRangeType extends EWSType
{
    /**
     * Represents the end date of a recurring task or calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a date object that extends DateTime.
     */
    public $EndDate;

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
