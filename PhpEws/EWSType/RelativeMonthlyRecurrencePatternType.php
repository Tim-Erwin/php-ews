<?php
/**
 * Contains RelativeMonthlyRecurrencePatternType.
 */

namespace PhpEws\EWSType;

/**
 * Describes a relative monthly recurrence pattern.
 */
class RelativeMonthlyRecurrencePatternType extends EWSType
{
    /**
     * Describes which week is used in a relative monthly recurrence pattern.
     *
     * @since Exchange 2007
     *
     * @var DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Describes which days of the week are in the relative monthly recurrence
     * pattern.
     *
     * @since Exchange 2007
     *
     * @var DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Defines the interval between two consecutive monthly recurring pattern
     * items.
     *
     * The range for this value is 1 to 99.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
