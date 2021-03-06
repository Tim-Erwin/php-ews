<?php
/**
 * Contains NonEmptyArrayOfPeriodsType.
 */

namespace PhpEws\EWSType;

/**
 * Represents an array of periods that define the time offset at different
 * stages of a time zone.
 */
class NonEmptyArrayOfPeriodsType extends EWSType
{
    /**
     * The name, time offset, and unique identifier for a specific stage of a
     * time zone.
     *
     * @since Exchange 2010
     *
     * @var PeriodType
     */
    public $Period;
}
