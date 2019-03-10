<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('order', 'OrderController');
Route::resource('product', 'ProductController');
Route::resource('productvariant', 'ProductVariantController');
Route::resource('draftorder', 'DraftOrderController');
Route::resource('discountprice', 'DiscountPriceController');
Route::resource('customer', 'CustomerController');
Route::resource('shop', 'ShopController');
Route::resource('productlisting', 'ProductListingController');
Route::resource('shopinvitation', 'ShopInvitationController');
Route::resource('fulfillement', 'FulfillementController');
Route::resource('collectionlisting', 'CollectionListingController');
Route::resource('collect', 'CollectController');
Route::resource('customcollection', 'CustomCollectionController');
Route::resource('pricerule', 'PriceRuleController');
Route::resource('orderitem', 'OrderItemController');
Route::resource('productimage', 'ProductImageController');
Route::resource('fulfillmentservice', 'FulfillmentServiceController');
Route::resource('inventoryitem', 'InventoryItemController');
Route::resource('inventorylevel', 'InventoryLevelController');
Route::resource('location', 'LocationController');
Route::resource('address', 'AddressController');
Route::resource('country', 'CountryController');
Route::resource('province', 'ProvinceController');
Route::resource('transaction', 'TransactionController');
Route::resource('refund', 'RefundController');
Route::resource('webhook', 'WebhookController');
Route::resource('checkout', 'CheckoutController');
