<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/target_cpa_opt_in_recommendation_goal.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class TargetCpaOptInRecommendationGoal
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
Igoogle/ads/googleads/v8/enums/target_cpa_opt_in_recommendation_goal.protogoogle.ads.googleads.v8.enums"�
$TargetCpaOptInRecommendationGoalEnum"�
 TargetCpaOptInRecommendationGoal
UNSPECIFIED 
UNKNOWN
	SAME_COST
SAME_CONVERSIONS
SAME_CPA
CLOSEST_CPAB�
!com.google.ads.googleads.v8.enumsB%TargetCpaOptInRecommendationGoalProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

