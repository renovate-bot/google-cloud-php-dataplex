<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace Google\Cloud\Dataplex\V1\EntryLinkEvent;

use UnexpectedValueException;

/**
 * Type of entry link log event.
 *
 * Protobuf type <code>google.cloud.dataplex.v1.EntryLinkEvent.EventType</code>
 */
class EventType
{
    /**
     * An unspecified event type.
     *
     * Generated from protobuf enum <code>EVENT_TYPE_UNSPECIFIED = 0;</code>
     */
    const EVENT_TYPE_UNSPECIFIED = 0;
    /**
     * EntryLink create event.
     *
     * Generated from protobuf enum <code>ENTRY_LINK_CREATE = 1;</code>
     */
    const ENTRY_LINK_CREATE = 1;
    /**
     * EntryLink delete event.
     *
     * Generated from protobuf enum <code>ENTRY_LINK_DELETE = 2;</code>
     */
    const ENTRY_LINK_DELETE = 2;

    private static $valueToName = [
        self::EVENT_TYPE_UNSPECIFIED => 'EVENT_TYPE_UNSPECIFIED',
        self::ENTRY_LINK_CREATE => 'ENTRY_LINK_CREATE',
        self::ENTRY_LINK_DELETE => 'ENTRY_LINK_DELETE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


