<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of applying a mutation.
 *
 * Generated from protobuf message <code>google.datastore.v1.MutationResult</code>
 */
class MutationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The automatically allocated key.
     * Set only when the mutation allocated a key.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Key key = 3;</code>
     */
    private $key = null;
    /**
     * The version of the entity on the server after processing the mutation. If
     * the mutation doesn't change anything on the server, then the version will
     * be the version of the current entity or, if no entity is present, a version
     * that is strictly greater than the version of any previous entity and less
     * than the version of any possible future entity.
     *
     * Generated from protobuf field <code>int64 version = 4;</code>
     */
    private $version = 0;
    /**
     * Whether a conflict was detected for this mutation. Always false when a
     * conflict detection strategy field is not set in the mutation.
     *
     * Generated from protobuf field <code>bool conflict_detected = 5;</code>
     */
    private $conflict_detected = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Datastore\V1\Key $key
     *           The automatically allocated key.
     *           Set only when the mutation allocated a key.
     *     @type int|string $version
     *           The version of the entity on the server after processing the mutation. If
     *           the mutation doesn't change anything on the server, then the version will
     *           be the version of the current entity or, if no entity is present, a version
     *           that is strictly greater than the version of any previous entity and less
     *           than the version of any possible future entity.
     *     @type bool $conflict_detected
     *           Whether a conflict was detected for this mutation. Always false when a
     *           conflict detection strategy field is not set in the mutation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct($data);
    }

    /**
     * The automatically allocated key.
     * Set only when the mutation allocated a key.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Key key = 3;</code>
     * @return \Google\Cloud\Datastore\V1\Key
     */
    public function getKey()
    {
        return isset($this->key) ? $this->key : null;
    }

    public function hasKey()
    {
        return isset($this->key);
    }

    public function clearKey()
    {
        unset($this->key);
    }

    /**
     * The automatically allocated key.
     * Set only when the mutation allocated a key.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Key key = 3;</code>
     * @param \Google\Cloud\Datastore\V1\Key $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Key::class);
        $this->key = $var;

        return $this;
    }

    /**
     * The version of the entity on the server after processing the mutation. If
     * the mutation doesn't change anything on the server, then the version will
     * be the version of the current entity or, if no entity is present, a version
     * that is strictly greater than the version of any previous entity and less
     * than the version of any possible future entity.
     *
     * Generated from protobuf field <code>int64 version = 4;</code>
     * @return int|string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the entity on the server after processing the mutation. If
     * the mutation doesn't change anything on the server, then the version will
     * be the version of the current entity or, if no entity is present, a version
     * that is strictly greater than the version of any previous entity and less
     * than the version of any possible future entity.
     *
     * Generated from protobuf field <code>int64 version = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->version = $var;

        return $this;
    }

    /**
     * Whether a conflict was detected for this mutation. Always false when a
     * conflict detection strategy field is not set in the mutation.
     *
     * Generated from protobuf field <code>bool conflict_detected = 5;</code>
     * @return bool
     */
    public function getConflictDetected()
    {
        return $this->conflict_detected;
    }

    /**
     * Whether a conflict was detected for this mutation. Always false when a
     * conflict detection strategy field is not set in the mutation.
     *
     * Generated from protobuf field <code>bool conflict_detected = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setConflictDetected($var)
    {
        GPBUtil::checkBool($var);
        $this->conflict_detected = $var;

        return $this;
    }

}
