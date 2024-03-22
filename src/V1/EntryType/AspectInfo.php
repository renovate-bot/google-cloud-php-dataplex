<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1\EntryType;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.dataplex.v1.EntryType.AspectInfo</code>
 */
class AspectInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Required aspect type for the entry type.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.resource_reference) = {</code>
     */
    private $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           Required aspect type for the entry type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required aspect type for the entry type.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required aspect type for the entry type.
     *
     * Generated from protobuf field <code>string type = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

