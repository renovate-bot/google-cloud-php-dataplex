<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/resources.proto

namespace Google\Cloud\Dataplex\V1\Asset\DiscoveryStatus;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The aggregated data statistics for the asset reported by discovery.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.Asset.DiscoveryStatus.Stats</code>
 */
class Stats extends \Google\Protobuf\Internal\Message
{
    /**
     * The count of data items within the referenced resource.
     *
     * Generated from protobuf field <code>int64 data_items = 1;</code>
     */
    protected $data_items = 0;
    /**
     * The number of stored data bytes within the referenced resource.
     *
     * Generated from protobuf field <code>int64 data_size = 2;</code>
     */
    protected $data_size = 0;
    /**
     * The count of table entities within the referenced resource.
     *
     * Generated from protobuf field <code>int64 tables = 3;</code>
     */
    protected $tables = 0;
    /**
     * The count of fileset entities within the referenced resource.
     *
     * Generated from protobuf field <code>int64 filesets = 4;</code>
     */
    protected $filesets = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $data_items
     *           The count of data items within the referenced resource.
     *     @type int|string $data_size
     *           The number of stored data bytes within the referenced resource.
     *     @type int|string $tables
     *           The count of table entities within the referenced resource.
     *     @type int|string $filesets
     *           The count of fileset entities within the referenced resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The count of data items within the referenced resource.
     *
     * Generated from protobuf field <code>int64 data_items = 1;</code>
     * @return int|string
     */
    public function getDataItems()
    {
        return $this->data_items;
    }

    /**
     * The count of data items within the referenced resource.
     *
     * Generated from protobuf field <code>int64 data_items = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDataItems($var)
    {
        GPBUtil::checkInt64($var);
        $this->data_items = $var;

        return $this;
    }

    /**
     * The number of stored data bytes within the referenced resource.
     *
     * Generated from protobuf field <code>int64 data_size = 2;</code>
     * @return int|string
     */
    public function getDataSize()
    {
        return $this->data_size;
    }

    /**
     * The number of stored data bytes within the referenced resource.
     *
     * Generated from protobuf field <code>int64 data_size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDataSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->data_size = $var;

        return $this;
    }

    /**
     * The count of table entities within the referenced resource.
     *
     * Generated from protobuf field <code>int64 tables = 3;</code>
     * @return int|string
     */
    public function getTables()
    {
        return $this->tables;
    }

    /**
     * The count of table entities within the referenced resource.
     *
     * Generated from protobuf field <code>int64 tables = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTables($var)
    {
        GPBUtil::checkInt64($var);
        $this->tables = $var;

        return $this;
    }

    /**
     * The count of fileset entities within the referenced resource.
     *
     * Generated from protobuf field <code>int64 filesets = 4;</code>
     * @return int|string
     */
    public function getFilesets()
    {
        return $this->filesets;
    }

    /**
     * The count of fileset entities within the referenced resource.
     *
     * Generated from protobuf field <code>int64 filesets = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFilesets($var)
    {
        GPBUtil::checkInt64($var);
        $this->filesets = $var;

        return $this;
    }

}


