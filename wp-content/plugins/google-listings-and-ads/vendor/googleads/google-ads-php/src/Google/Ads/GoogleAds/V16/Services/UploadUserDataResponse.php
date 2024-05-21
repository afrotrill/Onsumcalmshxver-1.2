<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/user_data_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [UserDataService.UploadUserData][google.ads.googleads.v16.services.UserDataService.UploadUserData]
 * Uploads made through this service will not be visible under the 'Segment
 * members' section for the Customer Match List in the Google Ads UI.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.UploadUserDataResponse</code>
 */
class UploadUserDataResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The date time at which the request was received by API, formatted as
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string upload_date_time = 3;</code>
     */
    protected $upload_date_time = null;
    /**
     * Number of upload data operations received by API.
     *
     * Generated from protobuf field <code>optional int32 received_operations_count = 4;</code>
     */
    protected $received_operations_count = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $upload_date_time
     *           The date time at which the request was received by API, formatted as
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *     @type int $received_operations_count
     *           Number of upload data operations received by API.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\UserDataService::initOnce();
        parent::__construct($data);
    }

    /**
     * The date time at which the request was received by API, formatted as
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string upload_date_time = 3;</code>
     * @return string
     */
    public function getUploadDateTime()
    {
        return isset($this->upload_date_time) ? $this->upload_date_time : '';
    }

    public function hasUploadDateTime()
    {
        return isset($this->upload_date_time);
    }

    public function clearUploadDateTime()
    {
        unset($this->upload_date_time);
    }

    /**
     * The date time at which the request was received by API, formatted as
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", for example, "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>optional string upload_date_time = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUploadDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->upload_date_time = $var;

        return $this;
    }

    /**
     * Number of upload data operations received by API.
     *
     * Generated from protobuf field <code>optional int32 received_operations_count = 4;</code>
     * @return int
     */
    public function getReceivedOperationsCount()
    {
        return isset($this->received_operations_count) ? $this->received_operations_count : 0;
    }

    public function hasReceivedOperationsCount()
    {
        return isset($this->received_operations_count);
    }

    public function clearReceivedOperationsCount()
    {
        unset($this->received_operations_count);
    }

    /**
     * Number of upload data operations received by API.
     *
     * Generated from protobuf field <code>optional int32 received_operations_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setReceivedOperationsCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->received_operations_count = $var;

        return $this;
    }

}

