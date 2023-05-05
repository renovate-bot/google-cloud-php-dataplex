<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/data_profile.proto

namespace Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The profile information for each field type.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo</code>
 */
class ProfileInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Ratio of rows with null value against total scanned rows.
     *
     * Generated from protobuf field <code>double null_ratio = 2;</code>
     */
    private $null_ratio = 0.0;
    /**
     * Ratio of rows with distinct values against total scanned rows.
     * Not available for complex non-groupable field type RECORD and fields
     * with REPEATABLE mode.
     *
     * Generated from protobuf field <code>double distinct_ratio = 3;</code>
     */
    private $distinct_ratio = 0.0;
    /**
     * The list of top N non-null values and number of times they occur in
     * the scanned data. N is 10 or equal to the number of distinct values
     * in the field, whichever is smaller. Not available for complex
     * non-groupable field type RECORD and fields with REPEATABLE mode.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.TopNValue top_n_values = 4;</code>
     */
    private $top_n_values;
    protected $field_info;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $null_ratio
     *           Ratio of rows with null value against total scanned rows.
     *     @type float $distinct_ratio
     *           Ratio of rows with distinct values against total scanned rows.
     *           Not available for complex non-groupable field type RECORD and fields
     *           with REPEATABLE mode.
     *     @type array<\Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\TopNValue>|\Google\Protobuf\Internal\RepeatedField $top_n_values
     *           The list of top N non-null values and number of times they occur in
     *           the scanned data. N is 10 or equal to the number of distinct values
     *           in the field, whichever is smaller. Not available for complex
     *           non-groupable field type RECORD and fields with REPEATABLE mode.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\StringFieldInfo $string_profile
     *           String type field information.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\IntegerFieldInfo $integer_profile
     *           Integer type field information.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\DoubleFieldInfo $double_profile
     *           Double type field information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\DataProfile::initOnce();
        parent::__construct($data);
    }

    /**
     * Ratio of rows with null value against total scanned rows.
     *
     * Generated from protobuf field <code>double null_ratio = 2;</code>
     * @return float
     */
    public function getNullRatio()
    {
        return $this->null_ratio;
    }

    /**
     * Ratio of rows with null value against total scanned rows.
     *
     * Generated from protobuf field <code>double null_ratio = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setNullRatio($var)
    {
        GPBUtil::checkDouble($var);
        $this->null_ratio = $var;

        return $this;
    }

    /**
     * Ratio of rows with distinct values against total scanned rows.
     * Not available for complex non-groupable field type RECORD and fields
     * with REPEATABLE mode.
     *
     * Generated from protobuf field <code>double distinct_ratio = 3;</code>
     * @return float
     */
    public function getDistinctRatio()
    {
        return $this->distinct_ratio;
    }

    /**
     * Ratio of rows with distinct values against total scanned rows.
     * Not available for complex non-groupable field type RECORD and fields
     * with REPEATABLE mode.
     *
     * Generated from protobuf field <code>double distinct_ratio = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setDistinctRatio($var)
    {
        GPBUtil::checkDouble($var);
        $this->distinct_ratio = $var;

        return $this;
    }

    /**
     * The list of top N non-null values and number of times they occur in
     * the scanned data. N is 10 or equal to the number of distinct values
     * in the field, whichever is smaller. Not available for complex
     * non-groupable field type RECORD and fields with REPEATABLE mode.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.TopNValue top_n_values = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopNValues()
    {
        return $this->top_n_values;
    }

    /**
     * The list of top N non-null values and number of times they occur in
     * the scanned data. N is 10 or equal to the number of distinct values
     * in the field, whichever is smaller. Not available for complex
     * non-groupable field type RECORD and fields with REPEATABLE mode.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.TopNValue top_n_values = 4;</code>
     * @param array<\Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\TopNValue>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopNValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\TopNValue::class);
        $this->top_n_values = $arr;

        return $this;
    }

    /**
     * String type field information.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.StringFieldInfo string_profile = 101;</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\StringFieldInfo|null
     */
    public function getStringProfile()
    {
        return $this->readOneof(101);
    }

    public function hasStringProfile()
    {
        return $this->hasOneof(101);
    }

    /**
     * String type field information.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.StringFieldInfo string_profile = 101;</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\StringFieldInfo $var
     * @return $this
     */
    public function setStringProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\StringFieldInfo::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * Integer type field information.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.IntegerFieldInfo integer_profile = 102;</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\IntegerFieldInfo|null
     */
    public function getIntegerProfile()
    {
        return $this->readOneof(102);
    }

    public function hasIntegerProfile()
    {
        return $this->hasOneof(102);
    }

    /**
     * Integer type field information.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.IntegerFieldInfo integer_profile = 102;</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\IntegerFieldInfo $var
     * @return $this
     */
    public function setIntegerProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\IntegerFieldInfo::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * Double type field information.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.DoubleFieldInfo double_profile = 103;</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\DoubleFieldInfo|null
     */
    public function getDoubleProfile()
    {
        return $this->readOneof(103);
    }

    public function hasDoubleProfile()
    {
        return $this->hasOneof(103);
    }

    /**
     * Double type field information.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult.Profile.Field.ProfileInfo.DoubleFieldInfo double_profile = 103;</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\DoubleFieldInfo $var
     * @return $this
     */
    public function setDoubleProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileResult\Profile\Field\ProfileInfo\DoubleFieldInfo::class);
        $this->writeOneof(103, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getFieldInfo()
    {
        return $this->whichOneof("field_info");
    }

}


