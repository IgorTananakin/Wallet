<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/bidding.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Common;

class Bidding
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
�
Dgoogle/ads/googleads/v8/enums/target_impression_share_location.protogoogle.ads.googleads.v8.enums"�
!TargetImpressionShareLocationEnum"~
TargetImpressionShareLocation
UNSPECIFIED 
UNKNOWN
ANYWHERE_ON_PAGE
TOP_OF_PAGE
ABSOLUTE_TOP_OF_PAGEB�
!com.google.ads.googleads.v8.enumsB"TargetImpressionShareLocationProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
,google/ads/googleads/v8/common/bidding.protogoogle.ads.googleads.v8.commongoogle/api/annotations.proto"L

Commission#
commission_rate_micros (H �B
_commission_rate_micros"
EnhancedCpc"G
	ManualCpc!
enhanced_cpc_enabled (H �B
_enhanced_cpc_enabled"
	ManualCpm"
	ManualCpv")
MaximizeConversions

target_cpa (".
MaximizeConversionValue
target_roas ("�
	TargetCpa
target_cpa_micros (H �#
cpc_bid_ceiling_micros (H�!
cpc_bid_floor_micros (H�B
_target_cpa_microsB
_cpc_bid_ceiling_microsB
_cpc_bid_floor_micros"
	TargetCpm"�
TargetImpressionSharep
location (2^.google.ads.googleads.v8.enums.TargetImpressionShareLocationEnum.TargetImpressionShareLocation%
location_fraction_micros (H �#
cpc_bid_ceiling_micros (H�B
_location_fraction_microsB
_cpc_bid_ceiling_micros"�

TargetRoas
target_roas (H �#
cpc_bid_ceiling_micros (H�!
cpc_bid_floor_micros (H�B
_target_roasB
_cpc_bid_ceiling_microsB
_cpc_bid_floor_micros"�
TargetSpend$
target_spend_micros (BH �#
cpc_bid_ceiling_micros (H�B
_target_spend_microsB
_cpc_bid_ceiling_micros"�

PercentCpc#
cpc_bid_ceiling_micros (H �!
enhanced_cpc_enabled (H�B
_cpc_bid_ceiling_microsB
_enhanced_cpc_enabledB�
"com.google.ads.googleads.v8.commonBBiddingProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

