# OpenAPIClient-php

Use the Fulfillment API to complete the process of packaging, addressing, handling, and shipping each order on behalf of the seller, in accordance with the payment method and timing specified at checkout.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github/zvps/ebay-sell-fulfillment-php-client.git"
    }
  ],
  "require": {
    "zvps/ebay-sell-fulfillment-php-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: Authorization Code
$config = Ebay\Sell\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ebay\Sell\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = 'order_id_example'; // string | The unique identifier of the order. Order ID values are shown in My eBay/Seller Hub, and are also returned by the getOrders method in the orders.orderId field. Note: A new order ID format was introduced to all eBay APIs (legacy and REST) in June 2019. In REST APIs that return Order IDs, including the Fulfillment API, all order IDs are returned in the new format, but the getOrder method will accept both the legacy and new format order ID. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line item orders. These order identifiers will be automatically generated after buyer payment, and unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support.
$field_groups = 'field_groups_example'; // string | The response type associated with the order. The only presently supported value is TAX_BREAKDOWN. This type returns a breakdown of tax and fee values associated with the order.

try {
    $result = $apiInstance->getOrder($order_id, $field_groups);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.ebay.com/sell/fulfillment/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OrderApi* | [**getOrder**](docs/Api/OrderApi.md#getorder) | **GET** /order/{orderId} | 
*OrderApi* | [**getOrders**](docs/Api/OrderApi.md#getorders) | **GET** /order | 
*OrderApi* | [**issueRefund**](docs/Api/OrderApi.md#issuerefund) | **POST** /order/{order_id}/issue_refund | Issue Refund
*ShippingFulfillmentApi* | [**createShippingFulfillment**](docs/Api/ShippingFulfillmentApi.md#createshippingfulfillment) | **POST** /order/{orderId}/shipping_fulfillment | 
*ShippingFulfillmentApi* | [**getShippingFulfillment**](docs/Api/ShippingFulfillmentApi.md#getshippingfulfillment) | **GET** /order/{orderId}/shipping_fulfillment/{fulfillmentId} | 
*ShippingFulfillmentApi* | [**getShippingFulfillments**](docs/Api/ShippingFulfillmentApi.md#getshippingfulfillments) | **GET** /order/{orderId}/shipping_fulfillment | 

## Models

- [Address](docs/Model/Address.md)
- [Amount](docs/Model/Amount.md)
- [AppliedPromotion](docs/Model/AppliedPromotion.md)
- [Buyer](docs/Model/Buyer.md)
- [CancelRequest](docs/Model/CancelRequest.md)
- [CancelStatus](docs/Model/CancelStatus.md)
- [DeliveryCost](docs/Model/DeliveryCost.md)
- [EbayCollectAndRemitTax](docs/Model/EbayCollectAndRemitTax.md)
- [EbayFulfillmentProgram](docs/Model/EbayFulfillmentProgram.md)
- [EbayTaxReference](docs/Model/EbayTaxReference.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [ExtendedContact](docs/Model/ExtendedContact.md)
- [FulfillmentStartInstruction](docs/Model/FulfillmentStartInstruction.md)
- [GiftDetails](docs/Model/GiftDetails.md)
- [IssueRefundRequest](docs/Model/IssueRefundRequest.md)
- [ItemLocation](docs/Model/ItemLocation.md)
- [LegacyReference](docs/Model/LegacyReference.md)
- [LineItem](docs/Model/LineItem.md)
- [LineItemFulfillmentInstructions](docs/Model/LineItemFulfillmentInstructions.md)
- [LineItemProperties](docs/Model/LineItemProperties.md)
- [LineItemReference](docs/Model/LineItemReference.md)
- [LineItemRefund](docs/Model/LineItemRefund.md)
- [Order](docs/Model/Order.md)
- [OrderRefund](docs/Model/OrderRefund.md)
- [OrderSearchPagedCollection](docs/Model/OrderSearchPagedCollection.md)
- [Payment](docs/Model/Payment.md)
- [PaymentHold](docs/Model/PaymentHold.md)
- [PaymentSummary](docs/Model/PaymentSummary.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PickupStep](docs/Model/PickupStep.md)
- [PostSaleAuthenticationProgram](docs/Model/PostSaleAuthenticationProgram.md)
- [PricingSummary](docs/Model/PricingSummary.md)
- [Program](docs/Model/Program.md)
- [Refund](docs/Model/Refund.md)
- [RefundItem](docs/Model/RefundItem.md)
- [SellerActionsToRelease](docs/Model/SellerActionsToRelease.md)
- [ShippingFulfillment](docs/Model/ShippingFulfillment.md)
- [ShippingFulfillmentDetails](docs/Model/ShippingFulfillmentDetails.md)
- [ShippingFulfillmentPagedCollection](docs/Model/ShippingFulfillmentPagedCollection.md)
- [ShippingStep](docs/Model/ShippingStep.md)
- [SimpleAmount](docs/Model/SimpleAmount.md)
- [Tax](docs/Model/Tax.md)
- [TaxAddress](docs/Model/TaxAddress.md)
- [TaxIdentifier](docs/Model/TaxIdentifier.md)

## Authorization

### Authorization Code

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.fulfillment**: View and manage your order fulfillments
    - **https://api.ebay.com/oauth/api_scope/sell.finances**: View and manage your payment and order information to display this information to you and allow you to initiate refunds using the third party application
    - **https://api.ebay.com/oauth/api_scope/sell.fulfillment.readonly**: View your order fulfillments

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1.19.7`
    - Package version: `5.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
