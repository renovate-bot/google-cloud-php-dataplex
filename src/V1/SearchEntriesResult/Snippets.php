<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/catalog.proto

namespace Google\Cloud\Dataplex\V1\SearchEntriesResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Snippets for the entry, contains HTML-style highlighting for
 * matched tokens, will be used in UI.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.SearchEntriesResult.Snippets</code>
 */
class Snippets extends \Google\Protobuf\Internal\Message
{
    /**
     * Entry
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entry dataplex_entry = 1;</code>
     */
    protected $dataplex_entry = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataplex\V1\Entry $dataplex_entry
     *           Entry
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Entry
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entry dataplex_entry = 1;</code>
     * @return \Google\Cloud\Dataplex\V1\Entry|null
     */
    public function getDataplexEntry()
    {
        return $this->dataplex_entry;
    }

    public function hasDataplexEntry()
    {
        return isset($this->dataplex_entry);
    }

    public function clearDataplexEntry()
    {
        unset($this->dataplex_entry);
    }

    /**
     * Entry
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.Entry dataplex_entry = 1;</code>
     * @param \Google\Cloud\Dataplex\V1\Entry $var
     * @return $this
     */
    public function setDataplexEntry($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\Entry::class);
        $this->dataplex_entry = $var;

        return $this;
    }

}


