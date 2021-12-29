<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/setting_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class SettingError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v8/errors/setting_error.protogoogle.ads.googleads.v8.errors"�
SettingErrorEnum"�
SettingError
UNSPECIFIED 
UNKNOWN!
SETTING_TYPE_IS_NOT_AVAILABLE0
,SETTING_TYPE_IS_NOT_COMPATIBLE_WITH_CAMPAIGN;
7TARGETING_SETTING_CONTAINS_INVALID_CRITERION_TYPE_GROUPQ
MTARGETING_SETTING_DEMOGRAPHIC_CRITERION_TYPE_GROUPS_MUST_BE_SET_TO_TARGET_ALL\\
XTARGETING_SETTING_CANNOT_CHANGE_TARGET_ALL_TO_FALSE_FOR_DEMOGRAPHIC_CRITERION_TYPE_GROUPC
?DYNAMIC_SEARCH_ADS_SETTING_AT_LEAST_ONE_FEED_ID_MUST_BE_PRESENT;
7DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_INVALID_DOMAIN_NAME	6
2DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_SUBDOMAIN_NAME
=
9DYNAMIC_SEARCH_ADS_SETTING_CONTAINS_INVALID_LANGUAGE_CODE>
:TARGET_ALL_IS_NOT_ALLOWED_FOR_PLACEMENT_IN_SEARCH_CAMPAIGN.
*SETTING_VALUE_NOT_COMPATIBLE_WITH_CAMPAIGNB�
"com.google.ads.googleads.v8.errorsBSettingErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

