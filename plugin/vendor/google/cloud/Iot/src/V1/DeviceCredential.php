<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A server-stored device credential used for authentication.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.DeviceCredential</code>
 */
class DeviceCredential extends \Google\Protobuf\Internal\Message
{
    /**
     * [Optional] The time at which this credential becomes invalid. This
     * credential will be ignored for new client authentication requests after
     * this timestamp; however, it will not be automatically deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 6;</code>
     */
    private $expiration_time = null;
    protected $credential;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iot\V1\PublicKeyCredential $public_key
     *           A public key used to verify the signature of JSON Web Tokens (JWTs).
     *           When adding a new device credential, either via device creation or via
     *           modifications, this public key credential may be required to be signed by
     *           one of the registry level certificates. More specifically, if the
     *           registry contains at least one certificate, any new device credential
     *           must be signed by one of the registry certificates. As a result,
     *           when the registry contains certificates, only X.509 certificates are
     *           accepted as device credentials. However, if the registry does
     *           not contain a certificate, self-signed certificates and public keys will
     *           be accepted. New device credentials must be different from every
     *           registry-level certificate.
     *     @type \Google\Protobuf\Timestamp $expiration_time
     *           [Optional] The time at which this credential becomes invalid. This
     *           credential will be ignored for new client authentication requests after
     *           this timestamp; however, it will not be automatically deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * A public key used to verify the signature of JSON Web Tokens (JWTs).
     * When adding a new device credential, either via device creation or via
     * modifications, this public key credential may be required to be signed by
     * one of the registry level certificates. More specifically, if the
     * registry contains at least one certificate, any new device credential
     * must be signed by one of the registry certificates. As a result,
     * when the registry contains certificates, only X.509 certificates are
     * accepted as device credentials. However, if the registry does
     * not contain a certificate, self-signed certificates and public keys will
     * be accepted. New device credentials must be different from every
     * registry-level certificate.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.PublicKeyCredential public_key = 2;</code>
     * @return \Google\Cloud\Iot\V1\PublicKeyCredential
     */
    public function getPublicKey()
    {
        return $this->readOneof(2);
    }

    public function hasPublicKey()
    {
        return $this->hasOneof(2);
    }

    /**
     * A public key used to verify the signature of JSON Web Tokens (JWTs).
     * When adding a new device credential, either via device creation or via
     * modifications, this public key credential may be required to be signed by
     * one of the registry level certificates. More specifically, if the
     * registry contains at least one certificate, any new device credential
     * must be signed by one of the registry certificates. As a result,
     * when the registry contains certificates, only X.509 certificates are
     * accepted as device credentials. However, if the registry does
     * not contain a certificate, self-signed certificates and public keys will
     * be accepted. New device credentials must be different from every
     * registry-level certificate.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.PublicKeyCredential public_key = 2;</code>
     * @param \Google\Cloud\Iot\V1\PublicKeyCredential $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iot\V1\PublicKeyCredential::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * [Optional] The time at which this credential becomes invalid. This
     * credential will be ignored for new client authentication requests after
     * this timestamp; however, it will not be automatically deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 6;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExpirationTime()
    {
        return isset($this->expiration_time) ? $this->expiration_time : null;
    }

    public function hasExpirationTime()
    {
        return isset($this->expiration_time);
    }

    public function clearExpirationTime()
    {
        unset($this->expiration_time);
    }

    /**
     * [Optional] The time at which this credential becomes invalid. This
     * credential will be ignored for new client authentication requests after
     * this timestamp; however, it will not be automatically deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiration_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpirationTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiration_time = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getCredential()
    {
        return $this->whichOneof("credential");
    }

}
