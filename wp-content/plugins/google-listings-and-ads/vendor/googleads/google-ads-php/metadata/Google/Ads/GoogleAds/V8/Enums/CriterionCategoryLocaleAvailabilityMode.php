<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/criterion_category_locale_availability_mode.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class CriterionCategoryLocaleAvailabilityMode
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
?
Ogoogle/ads/googleads/v8/enums/criterion_category_locale_availability_mode.protogoogle.ads.googleads.v8.enums"?
+CriterionCategoryLocaleAvailabilityModeEnum"?
\'CriterionCategoryLocaleAvailabilityMode
UNSPECIFIED 
UNKNOWN
ALL_LOCALES
COUNTRY_AND_ALL_LANGUAGES
LANGUAGE_AND_ALL_COUNTRIES
COUNTRY_AND_LANGUAGEB?
!com.google.ads.googleads.v8.enumsB,CriterionCategoryLocaleAvailabilityModeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums?GAA?Google.Ads.GoogleAds.V8.Enums?Google\\Ads\\GoogleAds\\V8\\Enums?!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

