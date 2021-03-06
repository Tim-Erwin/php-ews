<?php
/**
 * Contains TimeZoneType.
 */

namespace PhpEws\EWSType;

/**
 * Represents a time zone.
 */
class TimeZoneType extends EWSType
{
    /**
     * Represents the hourly offset from UTC for the current time zone.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $BaseOffset;

    /**
     * Represents the date and time when the time changes from standard time to
     * daylight saving time.
     *
     * @since Exchange 2007
     *
     * @var TimeChangeType
     */
    public $Daylight;

    /**
     * Represents the date and time when the time changes from daylight saving
     * time to standard time.
     *
     * @since Exchange 2007
     *
     * @var TimeChangeType
     */
    public $Standard;

    /**
     * The name of the time zone.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $TimeZoneName;
}
