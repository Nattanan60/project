<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/common.proto

namespace Google\Cloud\Firestore\V1beta1\TransactionOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for a transaction that can only be used to read documents.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.TransactionOptions.ReadOnly</code>
 */
class ReadOnly extends \Google\Protobuf\Internal\Message
{
    protected $consistency_selector;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $read_time
     *           Reads documents at the given time.
     *           This may not be older than 60 seconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Reads documents at the given time.
     * This may not be older than 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getReadTime()
    {
        return $this->readOneof(2);
    }

    /**
     * Reads documents at the given time.
     * This may not be older than 60 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp read_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setReadTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getConsistencySelector()
    {
        return $this->whichOneof("consistency_selector");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ReadOnly::class, \Google\Cloud\Firestore\V1beta1\TransactionOptions_ReadOnly::class);

