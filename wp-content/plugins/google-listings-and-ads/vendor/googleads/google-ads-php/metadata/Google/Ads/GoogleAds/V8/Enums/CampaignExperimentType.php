<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/enums/campaign_experiment_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Enums;

class CampaignExperimentType
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
�
<google/ads/googleads/v8/enums/campaign_experiment_type.protogoogle.ads.googleads.v8.enums"y
CampaignExperimentTypeEnum"[
CampaignExperimentType
UNSPECIFIED 
UNKNOWN
BASE	
DRAFT

EXPERIMENTB�
!com.google.ads.googleads.v8.enumsBCampaignExperimentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

