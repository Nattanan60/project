<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/osconfig/v1/patch_deployments.proto

namespace Google\Cloud\OsConfig\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A response message for listing patch deployments.
 *
 * Generated from protobuf message <code>google.cloud.osconfig.v1.ListPatchDeploymentsResponse</code>
 */
class ListPatchDeploymentsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of patch deployments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchDeployment patch_deployments = 1;</code>
     */
    private $patch_deployments;
    /**
     * A pagination token that can be used to get the next page of patch
     * deployments.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\OsConfig\V1\PatchDeployment[]|\Google\Protobuf\Internal\RepeatedField $patch_deployments
     *           The list of patch deployments.
     *     @type string $next_page_token
     *           A pagination token that can be used to get the next page of patch
     *           deployments.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Osconfig\V1\PatchDeployments::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of patch deployments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchDeployment patch_deployments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPatchDeployments()
    {
        return $this->patch_deployments;
    }

    /**
     * The list of patch deployments.
     *
     * Generated from protobuf field <code>repeated .google.cloud.osconfig.v1.PatchDeployment patch_deployments = 1;</code>
     * @param \Google\Cloud\OsConfig\V1\PatchDeployment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPatchDeployments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\OsConfig\V1\PatchDeployment::class);
        $this->patch_deployments = $arr;

        return $this;
    }

    /**
     * A pagination token that can be used to get the next page of patch
     * deployments.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A pagination token that can be used to get the next page of patch
     * deployments.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

