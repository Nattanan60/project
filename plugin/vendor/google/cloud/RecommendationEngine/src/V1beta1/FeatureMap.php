<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/common.proto

namespace Google\Cloud\RecommendationEngine\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * FeatureMap represents extra features that customers want to include in the
 * recommendation model for catalogs/user events as categorical/numerical
 * features.
 *
 * Generated from protobuf message <code>google.cloud.recommendationengine.v1beta1.FeatureMap</code>
 */
class FeatureMap extends \Google\Protobuf\Internal\Message
{
    /**
     * Categorical features that can take on one of a limited number of possible
     * values. Some examples would be the brand/maker of a product, or country of
     * a customer.
     * Feature names and values must be UTF-8 encoded strings.
     * For example: `{ "colors": {"value": ["yellow", "green"]},
     *                 "sizes": {"value":["S", "M"]}`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommendationengine.v1beta1.FeatureMap.StringList> categorical_features = 1;</code>
     */
    private $categorical_features;
    /**
     * Numerical features. Some examples would be the height/weight of a product,
     * or age of a customer.
     * Feature names must be UTF-8 encoded strings.
     * For example: `{ "lengths_cm": {"value":[2.3, 15.4]},
     *                 "heights_cm": {"value":[8.1, 6.4]} }`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommendationengine.v1beta1.FeatureMap.FloatList> numerical_features = 2;</code>
     */
    private $numerical_features;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $categorical_features
     *           Categorical features that can take on one of a limited number of possible
     *           values. Some examples would be the brand/maker of a product, or country of
     *           a customer.
     *           Feature names and values must be UTF-8 encoded strings.
     *           For example: `{ "colors": {"value": ["yellow", "green"]},
     *                           "sizes": {"value":["S", "M"]}`
     *     @type array|\Google\Protobuf\Internal\MapField $numerical_features
     *           Numerical features. Some examples would be the height/weight of a product,
     *           or age of a customer.
     *           Feature names must be UTF-8 encoded strings.
     *           For example: `{ "lengths_cm": {"value":[2.3, 15.4]},
     *                           "heights_cm": {"value":[8.1, 6.4]} }`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Categorical features that can take on one of a limited number of possible
     * values. Some examples would be the brand/maker of a product, or country of
     * a customer.
     * Feature names and values must be UTF-8 encoded strings.
     * For example: `{ "colors": {"value": ["yellow", "green"]},
     *                 "sizes": {"value":["S", "M"]}`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommendationengine.v1beta1.FeatureMap.StringList> categorical_features = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getCategoricalFeatures()
    {
        return $this->categorical_features;
    }

    /**
     * Categorical features that can take on one of a limited number of possible
     * values. Some examples would be the brand/maker of a product, or country of
     * a customer.
     * Feature names and values must be UTF-8 encoded strings.
     * For example: `{ "colors": {"value": ["yellow", "green"]},
     *                 "sizes": {"value":["S", "M"]}`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommendationengine.v1beta1.FeatureMap.StringList> categorical_features = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setCategoricalFeatures($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap\StringList::class);
        $this->categorical_features = $arr;

        return $this;
    }

    /**
     * Numerical features. Some examples would be the height/weight of a product,
     * or age of a customer.
     * Feature names must be UTF-8 encoded strings.
     * For example: `{ "lengths_cm": {"value":[2.3, 15.4]},
     *                 "heights_cm": {"value":[8.1, 6.4]} }`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommendationengine.v1beta1.FeatureMap.FloatList> numerical_features = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getNumericalFeatures()
    {
        return $this->numerical_features;
    }

    /**
     * Numerical features. Some examples would be the height/weight of a product,
     * or age of a customer.
     * Feature names must be UTF-8 encoded strings.
     * For example: `{ "lengths_cm": {"value":[2.3, 15.4]},
     *                 "heights_cm": {"value":[8.1, 6.4]} }`
     *
     * Generated from protobuf field <code>map<string, .google.cloud.recommendationengine.v1beta1.FeatureMap.FloatList> numerical_features = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setNumericalFeatures($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\RecommendationEngine\V1beta1\FeatureMap\FloatList::class);
        $this->numerical_features = $arr;

        return $this;
    }

}

