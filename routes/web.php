<?php

use Illuminate\Support\Facades\Route;

Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal'));
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal'));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus'));