<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/security.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ResourceAccessSpec holds the access control configuration to be enforced
 * on the resources, for example, Cloud Storage bucket, BigQuery dataset,
 * BigQuery table.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.ResourceAccessSpec</code>
 */
class ResourceAccessSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The format of strings follows the pattern followed by IAM in the
     * bindings. user:{email}, serviceAccount:{email} group:{email}.
     * The set of principals to be granted reader role on the resource.
     *
     * Generated from protobuf field <code>repeated string readers = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $readers;
    /**
     * Optional. The set of principals to be granted writer role on the resource.
     *
     * Generated from protobuf field <code>repeated string writers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $writers;
    /**
     * Optional. The set of principals to be granted owner role on the resource.
     *
     * Generated from protobuf field <code>repeated string owners = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $owners;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $readers
     *           Optional. The format of strings follows the pattern followed by IAM in the
     *           bindings. user:{email}, serviceAccount:{email} group:{email}.
     *           The set of principals to be granted reader role on the resource.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $writers
     *           Optional. The set of principals to be granted writer role on the resource.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $owners
     *           Optional. The set of principals to be granted owner role on the resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Security::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. The format of strings follows the pattern followed by IAM in the
     * bindings. user:{email}, serviceAccount:{email} group:{email}.
     * The set of principals to be granted reader role on the resource.
     *
     * Generated from protobuf field <code>repeated string readers = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReaders()
    {
        return $this->readers;
    }

    /**
     * Optional. The format of strings follows the pattern followed by IAM in the
     * bindings. user:{email}, serviceAccount:{email} group:{email}.
     * The set of principals to be granted reader role on the resource.
     *
     * Generated from protobuf field <code>repeated string readers = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->readers = $arr;

        return $this;
    }

    /**
     * Optional. The set of principals to be granted writer role on the resource.
     *
     * Generated from protobuf field <code>repeated string writers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWriters()
    {
        return $this->writers;
    }

    /**
     * Optional. The set of principals to be granted writer role on the resource.
     *
     * Generated from protobuf field <code>repeated string writers = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWriters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->writers = $arr;

        return $this;
    }

    /**
     * Optional. The set of principals to be granted owner role on the resource.
     *
     * Generated from protobuf field <code>repeated string owners = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOwners()
    {
        return $this->owners;
    }

    /**
     * Optional. The set of principals to be granted owner role on the resource.
     *
     * Generated from protobuf field <code>repeated string owners = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOwners($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->owners = $arr;

        return $this;
    }

}
