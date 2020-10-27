<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The syntax analysis request message.
 *
 * Generated from protobuf message <code>google.cloud.language.v1.AnalyzeSyntaxRequest</code>
 */
class AnalyzeSyntaxRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $document = null;
    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     */
    private $encoding_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Language\V1\Document $document
     *           Input document.
     *     @type int $encoding_type
     *           The encoding type used by the API to calculate offsets.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct($data);
    }

    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Language\V1\Document
     */
    public function getDocument()
    {
        return isset($this->document) ? $this->document : null;
    }

    public function hasDocument()
    {
        return isset($this->document);
    }

    public function clearDocument()
    {
        unset($this->document);
    }

    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Language\V1\Document $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\Document::class);
        $this->document = $var;

        return $this;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     * @return int
     */
    public function getEncodingType()
    {
        return $this->encoding_type;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEncodingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1\EncodingType::class);
        $this->encoding_type = $var;

        return $this;
    }

}

