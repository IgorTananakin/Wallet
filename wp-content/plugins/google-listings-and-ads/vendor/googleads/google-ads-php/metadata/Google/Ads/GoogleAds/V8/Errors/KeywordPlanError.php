<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/keyword_plan_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class KeywordPlanError
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
�
7google/ads/googleads/v8/errors/keyword_plan_error.protogoogle.ads.googleads.v8.errors"�
KeywordPlanErrorEnum"�
KeywordPlanError
UNSPECIFIED 
UNKNOWN
BID_MULTIPLIER_OUT_OF_RANGE
BID_TOO_HIGH
BID_TOO_LOW"
BID_TOO_MANY_FRACTIONAL_DIGITS
DAILY_BUDGET_TOO_LOW+
\'DAILY_BUDGET_TOO_MANY_FRACTIONAL_DIGITS
INVALID_VALUE 
KEYWORD_PLAN_HAS_NO_KEYWORDS	
KEYWORD_PLAN_NOT_ENABLED

KEYWORD_PLAN_NOT_FOUND
MISSING_BID
MISSING_FORECAST_PERIOD
INVALID_FORECAST_DATE_RANGE
INVALID_NAMEB�
"com.google.ads.googleads.v8.errorsBKeywordPlanErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

