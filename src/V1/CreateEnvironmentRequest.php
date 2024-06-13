<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/service.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Create environment request.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.CreateEnvironmentRequest</code>
 */
class CreateEnvironmentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the parent lake:
     * `projects/{project_id}/locations/{location_id}/lakes/{lake_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Environment identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the lake.
     *
     * Generated from protobuf field <code>string environment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $environment_id = '';
    /**
     * Required. Environment resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment environment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $environment = null;
    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                $parent        Required. The resource name of the parent lake:
     *                                                             `projects/{project_id}/locations/{location_id}/lakes/{lake_id}`. Please see
     *                                                             {@see DataplexServiceClient::lakeName()} for help formatting this field.
     * @param \Google\Cloud\Dataplex\V1\Environment $environment   Required. Environment resource.
     * @param string                                $environmentId Required. Environment identifier.
     *                                                             * Must contain only lowercase letters, numbers and hyphens.
     *                                                             * Must start with a letter.
     *                                                             * Must be between 1-63 characters.
     *                                                             * Must end with a number or a letter.
     *                                                             * Must be unique within the lake.
     *
     * @return \Google\Cloud\Dataplex\V1\CreateEnvironmentRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dataplex\V1\Environment $environment, string $environmentId): self
    {
        return (new self())
            ->setParent($parent)
            ->setEnvironment($environment)
            ->setEnvironmentId($environmentId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the parent lake:
     *           `projects/{project_id}/locations/{location_id}/lakes/{lake_id}`.
     *     @type string $environment_id
     *           Required. Environment identifier.
     *           * Must contain only lowercase letters, numbers and hyphens.
     *           * Must start with a letter.
     *           * Must be between 1-63 characters.
     *           * Must end with a number or a letter.
     *           * Must be unique within the lake.
     *     @type \Google\Cloud\Dataplex\V1\Environment $environment
     *           Required. Environment resource.
     *     @type bool $validate_only
     *           Optional. Only validate the request, but do not perform mutations.
     *           The default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the parent lake:
     * `projects/{project_id}/locations/{location_id}/lakes/{lake_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the parent lake:
     * `projects/{project_id}/locations/{location_id}/lakes/{lake_id}`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Environment identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the lake.
     *
     * Generated from protobuf field <code>string environment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEnvironmentId()
    {
        return $this->environment_id;
    }

    /**
     * Required. Environment identifier.
     * * Must contain only lowercase letters, numbers and hyphens.
     * * Must start with a letter.
     * * Must be between 1-63 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the lake.
     *
     * Generated from protobuf field <code>string environment_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEnvironmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->environment_id = $var;

        return $this;
    }

    /**
     * Required. Environment resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment environment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\Environment|null
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    public function hasEnvironment()
    {
        return isset($this->environment);
    }

    public function clearEnvironment()
    {
        unset($this->environment);
    }

    /**
     * Required. Environment resource.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Environment environment = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\Environment $var
     * @return $this
     */
    public function setEnvironment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Environment::class);
        $this->environment = $var;

        return $this;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the request, but do not perform mutations.
     * The default is false.
     *
     * Generated from protobuf field <code>bool validate_only = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

