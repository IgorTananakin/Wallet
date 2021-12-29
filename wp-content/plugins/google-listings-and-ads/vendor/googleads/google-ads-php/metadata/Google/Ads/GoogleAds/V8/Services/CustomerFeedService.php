<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/customer_feed_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Services;

class CustomerFeedService
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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v8/enums/matching_function_context_type.protogoogle.ads.googleads.v8.enums"�
MatchingFunctionContextTypeEnum"t
MatchingFunctionContextType
UNSPECIFIED 
UNKNOWN
FEED_ITEM_ID
DEVICE_NAME
FEED_ITEM_SET_IDB�
!com.google.ads.googleads.v8.enumsB MatchingFunctionContextTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
>google/ads/googleads/v8/enums/matching_function_operator.protogoogle.ads.googleads.v8.enums"�
MatchingFunctionOperatorEnum"u
MatchingFunctionOperator
UNSPECIFIED 
UNKNOWN
IN
IDENTITY

EQUALS
AND
CONTAINS_ANYB�
!com.google.ads.googleads.v8.enumsBMatchingFunctionOperatorProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
6google/ads/googleads/v8/common/matching_function.protogoogle.ads.googleads.v8.common>google/ads/googleads/v8/enums/matching_function_operator.protogoogle/api/annotations.proto"�
MatchingFunction
function_string (	H �f
operator (2T.google.ads.googleads.v8.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator>
left_operands (2\'.google.ads.googleads.v8.common.Operand?
right_operands (2\'.google.ads.googleads.v8.common.OperandB
_function_string"�
OperandS
constant_operand (27.google.ads.googleads.v8.common.Operand.ConstantOperandH ^
feed_attribute_operand (2<.google.ads.googleads.v8.common.Operand.FeedAttributeOperandH S
function_operand (27.google.ads.googleads.v8.common.Operand.FunctionOperandH `
request_context_operand (2=.google.ads.googleads.v8.common.Operand.RequestContextOperandH �
ConstantOperand
string_value (	H 

long_value (H 
boolean_value (H 
double_value (H B
constant_operand_valuen
FeedAttributeOperand
feed_id (H �
feed_attribute_id (H�B

_feed_idB
_feed_attribute_id^
FunctionOperandK
matching_function (20.google.ads.googleads.v8.common.MatchingFunction�
RequestContextOperandp
context_type (2Z.google.ads.googleads.v8.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextTypeB
function_argument_operandB�
"com.google.ads.googleads.v8.commonBMatchingFunctionProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/common;common�GAA�Google.Ads.GoogleAds.V8.Common�Google\\Ads\\GoogleAds\\V8\\Common�"Google::Ads::GoogleAds::V8::Commonbproto3
�
4google/ads/googleads/v8/enums/placeholder_type.protogoogle.ads.googleads.v8.enums"�
PlaceholderTypeEnum"�
PlaceholderType
UNSPECIFIED 
UNKNOWN
SITELINK
CALL
APP
LOCATION
AFFILIATE_LOCATION
CALLOUT
STRUCTURED_SNIPPET
MESSAGE		
PRICE

	PROMOTION
AD_CUSTOMIZER
DYNAMIC_EDUCATION
DYNAMIC_FLIGHT
DYNAMIC_CUSTOM
DYNAMIC_HOTEL
DYNAMIC_REAL_ESTATE
DYNAMIC_TRAVEL
DYNAMIC_LOCAL
DYNAMIC_JOB	
IMAGEB�
!com.google.ads.googleads.v8.enumsBPlaceholderTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
4google/ads/googleads/v8/enums/feed_link_status.protogoogle.ads.googleads.v8.enums"^
FeedLinkStatusEnum"H
FeedLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v8.enumsBFeedLinkStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
9google/ads/googleads/v8/enums/response_content_type.protogoogle.ads.googleads.v8.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v8.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
5google/ads/googleads/v8/resources/customer_feed.proto!google.ads.googleads.v8.resources4google/ads/googleads/v8/enums/feed_link_status.proto4google/ads/googleads/v8/enums/placeholder_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomerFeedD
resource_name (	B-�A�A\'
%googleads.googleapis.com/CustomerFeed8
feed (	B%�A�A
googleads.googleapis.com/FeedH �]
placeholder_types (2B.google.ads.googleads.v8.enums.PlaceholderTypeEnum.PlaceholderTypeK
matching_function (20.google.ads.googleads.v8.common.MatchingFunctionU
status (2@.google.ads.googleads.v8.enums.FeedLinkStatusEnum.FeedLinkStatusB�A:[�AX
%googleads.googleapis.com/CustomerFeed/customers/{customer_id}/customerFeeds/{feed_id}B
_feedB�
%com.google.ads.googleads.v8.resourcesBCustomerFeedProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3
�
<google/ads/googleads/v8/services/customer_feed_service.proto google.ads.googleads.v8.services5google/ads/googleads/v8/resources/customer_feed.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"^
GetCustomerFeedRequestD
resource_name (	B-�A�A\'
%googleads.googleapis.com/CustomerFeed"�
MutateCustomerFeedsRequest
customer_id (	B�AP

operations (27.google.ads.googleads.v8.services.CustomerFeedOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v8.enums.ResponseContentTypeEnum.ResponseContentType"�
CustomerFeedOperation/
update_mask (2.google.protobuf.FieldMaskA
create (2/.google.ads.googleads.v8.resources.CustomerFeedH A
update (2/.google.ads.googleads.v8.resources.CustomerFeedH 
remove (	H B
	operation"�
MutateCustomerFeedsResponse1
partial_failure_error (2.google.rpc.StatusK
results (2:.google.ads.googleads.v8.services.MutateCustomerFeedResult"y
MutateCustomerFeedResult
resource_name (	F
customer_feed (2/.google.ads.googleads.v8.resources.CustomerFeed2�
CustomerFeedService�
GetCustomerFeed8.google.ads.googleads.v8.services.GetCustomerFeedRequest/.google.ads.googleads.v8.resources.CustomerFeed"G���1//v8/{resource_name=customers/*/customerFeeds/*}�Aresource_name�
MutateCustomerFeeds<.google.ads.googleads.v8.services.MutateCustomerFeedsRequest=.google.ads.googleads.v8.services.MutateCustomerFeedsResponse"V���7"2/v8/customers/{customer_id=*}/customerFeeds:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v8.servicesBCustomerFeedServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v8/services;services�GAA� Google.Ads.GoogleAds.V8.Services� Google\\Ads\\GoogleAds\\V8\\Services�$Google::Ads::GoogleAds::V8::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

