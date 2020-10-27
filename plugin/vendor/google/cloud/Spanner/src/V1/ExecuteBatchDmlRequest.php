<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ExecuteBatchDml][google.spanner.v1.Spanner.ExecuteBatchDml].
 *
 * Generated from protobuf message <code>google.spanner.v1.ExecuteBatchDmlRequest</code>
 */
class ExecuteBatchDmlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session in which the DML statements should be performed.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $session = '';
    /**
     * Required. The transaction to use. Must be a read-write transaction.
     * To protect against replays, single-use transactions are not supported. The
     * caller must either supply an existing transaction ID or begin a new
     * transaction.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $transaction = null;
    /**
     * Required. The list of statements to execute in this batch. Statements are executed
     * serially, such that the effects of statement `i` are visible to statement
     * `i+1`. Each statement must be a DML statement. Execution stops at the
     * first failed statement; the remaining statements are not executed.
     * Callers must provide at least one statement.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.ExecuteBatchDmlRequest.Statement statements = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $statements;
    /**
     * Required. A per-transaction sequence number used to identify this request. This field
     * makes each request idempotent such that if the request is received multiple
     * times, at most one will succeed.
     * The sequence number must be monotonically increasing within the
     * transaction. If a request arrives for the first time with an out-of-order
     * sequence number, the transaction may be aborted. Replays of previously
     * handled requests will yield the same response as the first execution.
     *
     * Generated from protobuf field <code>int64 seqno = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $seqno = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Required. The session in which the DML statements should be performed.
     *     @type \Google\Cloud\Spanner\V1\TransactionSelector $transaction
     *           Required. The transaction to use. Must be a read-write transaction.
     *           To protect against replays, single-use transactions are not supported. The
     *           caller must either supply an existing transaction ID or begin a new
     *           transaction.
     *     @type \Google\Cloud\Spanner\V1\ExecuteBatchDmlRequest\Statement[]|\Google\Protobuf\Internal\RepeatedField $statements
     *           Required. The list of statements to execute in this batch. Statements are executed
     *           serially, such that the effects of statement `i` are visible to statement
     *           `i+1`. Each statement must be a DML statement. Execution stops at the
     *           first failed statement; the remaining statements are not executed.
     *           Callers must provide at least one statement.
     *     @type int|string $seqno
     *           Required. A per-transaction sequence number used to identify this request. This field
     *           makes each request idempotent such that if the request is received multiple
     *           times, at most one will succeed.
     *           The sequence number must be monotonically increasing within the
     *           transaction. If a request arrives for the first time with an out-of-order
     *           sequence number, the transaction may be aborted. Replays of previously
     *           handled requests will yield the same response as the first execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The session in which the DML statements should be performed.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The session in which the DML statements should be performed.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Required. The transaction to use. Must be a read-write transaction.
     * To protect against replays, single-use transactions are not supported. The
     * caller must either supply an existing transaction ID or begin a new
     * transaction.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\V1\TransactionSelector
     */
    public function getTransaction()
    {
        return isset($this->transaction) ? $this->transaction : null;
    }

    public function hasTransaction()
    {
        return isset($this->transaction);
    }

    public function clearTransaction()
    {
        unset($this->transaction);
    }

    /**
     * Required. The transaction to use. Must be a read-write transaction.
     * To protect against replays, single-use transactions are not supported. The
     * caller must either supply an existing transaction ID or begin a new
     * transaction.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\V1\TransactionSelector $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\TransactionSelector::class);
        $this->transaction = $var;

        return $this;
    }

    /**
     * Required. The list of statements to execute in this batch. Statements are executed
     * serially, such that the effects of statement `i` are visible to statement
     * `i+1`. Each statement must be a DML statement. Execution stops at the
     * first failed statement; the remaining statements are not executed.
     * Callers must provide at least one statement.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.ExecuteBatchDmlRequest.Statement statements = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStatements()
    {
        return $this->statements;
    }

    /**
     * Required. The list of statements to execute in this batch. Statements are executed
     * serially, such that the effects of statement `i` are visible to statement
     * `i+1`. Each statement must be a DML statement. Execution stops at the
     * first failed statement; the remaining statements are not executed.
     * Callers must provide at least one statement.
     *
     * Generated from protobuf field <code>repeated .google.spanner.v1.ExecuteBatchDmlRequest.Statement statements = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\V1\ExecuteBatchDmlRequest\Statement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStatements($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\V1\ExecuteBatchDmlRequest\Statement::class);
        $this->statements = $arr;

        return $this;
    }

    /**
     * Required. A per-transaction sequence number used to identify this request. This field
     * makes each request idempotent such that if the request is received multiple
     * times, at most one will succeed.
     * The sequence number must be monotonically increasing within the
     * transaction. If a request arrives for the first time with an out-of-order
     * sequence number, the transaction may be aborted. Replays of previously
     * handled requests will yield the same response as the first execution.
     *
     * Generated from protobuf field <code>int64 seqno = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int|string
     */
    public function getSeqno()
    {
        return $this->seqno;
    }

    /**
     * Required. A per-transaction sequence number used to identify this request. This field
     * makes each request idempotent such that if the request is received multiple
     * times, at most one will succeed.
     * The sequence number must be monotonically increasing within the
     * transaction. If a request arrives for the first time with an out-of-order
     * sequence number, the transaction may be aborted. Replays of previously
     * handled requests will yield the same response as the first execution.
     *
     * Generated from protobuf field <code>int64 seqno = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSeqno($var)
    {
        GPBUtil::checkInt64($var);
        $this->seqno = $var;

        return $this;
    }

}

