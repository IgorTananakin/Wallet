<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/life_event_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class LifeEventService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
@google/ads/googleads/v8/enums/advertising_channel_sub_type.protogoogle.ads.googleads.v8.enums"�
AdvertisingChannelSubTypeEnum"�
AdvertisingChannelSubType
UNSPECIFIED 
UNKNOWN
SEARCH_MOBILE_APP
DISPLAY_MOBILE_APP
SEARCH_EXPRESS
DISPLAY_EXPRESS
SHOPPING_SMART_ADS
DISPLAY_GMAIL_AD
DISPLAY_SMART_CAMPAIGN
VIDEO_OUTSTREAM	
VIDEO_ACTION

VIDEO_NON_SKIPPABLE
APP_CAMPAIGN
APP_CAMPAIGN_FOR_ENGAGEMENT
LOCAL_CAMPAIGN#
SHOPPING_COMPARISON_LISTING_ADS
SMART_CAMPAIGN
VIDEO_SEQUENCEB�
!com.google.ads.googleads.v8.enumsBAdvertisingChannelSubTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Pgoogle/ads/googleads/v8/enums/criterion_category_channel_availability_mode.protogoogle.ads.googleads.v8.enums"�
,CriterionCategoryChannelAvailabilityModeEnum"�
(CriterionCategoryChannelAvailabilityMode
UNSPECIFIED 
UNKNOWN
ALL_CHANNELS!
CHANNEL_TYPE_AND_ALL_SUBTYPES$
 CHANNEL_TYPE_AND_SUBSET_SUBTYPESB�
!com.google.ads.googleads.v8.enumsB-CriterionCategoryChannelAvailabilityModeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
<google/ads/googleads/v8/enums/advertising_channel_type.protogoogle.ads.googleads.v8.enums"�
AdvertisingChannelTypeEnum"�
AdvertisingChannelType
UNSPECIFIED 
UNKNOWN

SEARCH
DISPLAY
SHOPPING	
HOTEL	
VIDEO
MULTI_CHANNEL	
LOCAL	
SMART	B�
!com.google.ads.googleads.v8.enumsBAdvertisingChannelTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Ogoogle/ads/googleads/v8/enums/criterion_category_locale_availability_mode.protogoogle.ads.googleads.v8.enums"�
+CriterionCategoryLocaleAvailabilityModeEnum"�
\'CriterionCategoryLocaleAvailabilityMode
UNSPECIFIED 
UNKNOWN
ALL_LOCALES
COUNTRY_AND_ALL_LANGUAGES
LANGUAGE_AND_ALL_COUNTRIES
COUNTRY_AND_LANGUAGEB�
!com.google.ads.googleads.v8.enumsB,CriterionCategoryLocaleAvailabilityModeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
Dgoogle/ads/googleads/v8/common/criterion_category_availability.protogoogle.ads.googleads.v8.common<google/ads/googleads/v8/enums/advertising_channel_type.protoPgoogle/ads/googleads/v8/enums/criterion_category_channel_availability_mode.protoOgoogle/ads/googleads/v8/enums/criterion_category_locale_availability_mode.protogoogle/api/annotations.proto"�
CriterionCategoryAvailabilityU
channel (2D.google.ads.googleads.v8.common.CriterionCategoryChannelAvailabilityS
locale (2C.google.ads.googleads.v8.common.CriterionCategoryLocaleAvailability"�
$CriterionCategoryChannelAvailability�
availability_mode (2t.google.ads.googleads.v8.enums.CriterionCategoryChannelAvailabilityModeEnum.CriterionCategoryChannelAvailabilityModer
advertising_channel_type (2P.google.ads.googleads.v8.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType|
advertising_channel_sub_type (2V.google.ads.googleads.v8.enums.AdvertisingChannelSubTypeEnum.AdvertisingChannelSubType-
 include_default_channel_sub_type (H �B#
!_include_default_channel_sub_type"�
#CriterionCategoryLocaleAvailability�
availability_mode (2r.google.ads.googleads.v8.enums.CriterionCategoryLocaleAvailabilityModeEnum.CriterionCategoryLocaleAvailabilityMode
country_code (	H �
language_code (	H�B
_country_codeB
_language_codeB�
"com.google.ads.googleads.v8.commonB"CriterionCategoryAvailabilityProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
2google/ads/googleads/v8/resources/life_event.proto!google.ads.googleads.v8.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
	LifeEventA
resource_name (	B*�A�A$
"googleads.googleapis.com/LifeEvent
id (B�A
name (	B�A:
parent (	B*�A�A$
"googleads.googleapis.com/LifeEvent
launched_to_all (B�AZ
availabilities (2=.google.ads.googleads.v8.common.CriterionCategoryAvailabilityB�A:[�AX
"googleads.googleapis.com/LifeEvent2customers/{customer_id}/lifeEvents/{life_event_id}B�
%com.google.ads.googleads.v8.resourcesBLifeEventProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
9google/ads/googleads/v8/services/life_event_service.proto google.ads.googleads.v8.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto"X
GetLifeEventRequestA
resource_name (	B*�A�A$
"googleads.googleapis.com/LifeEvent2�
LifeEventService�
GetLifeEvent5.google.ads.googleads.v8.services.GetLifeEventRequest,.google.ads.googleads.v8.resources.LifeEvent"D���.,/v8/{resource_name=customers/*/lifeEvents/*}�Aresource_nameE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBLifeEventServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

