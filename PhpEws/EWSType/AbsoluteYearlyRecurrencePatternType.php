<?php
/**
 * Contains AbsoluteYearlyRecurrencePatternType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a yearly recurrence pattern.
 */
class AbsoluteYearlyRecurrencePatternType extends EWSType
{
    /**
     * Describes the day in a month on which a recurring item occurs.
     * 
     * The range of values for this property is 1 to 31. If for a particular
     * month this value is larger than the number of days in the month, the last
     * day of the month is assumed for this property.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $DayOfMonth;

    /**
     * Describes the month in which a yearly recurring item occurs.
     *
     * @since Exchange 2007
     *
     * @var MonthNamesType
     */
    public $Month;
}
