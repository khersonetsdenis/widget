<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Payment extends Controller
{
    public function __construct()
    {
        \Cloudipsp\Configuration::setMerchantId(1396424);
        \Cloudipsp\Configuration::setSecretKey('test');
    }

    public function paymentForm()
    {
        $data = [
            'order_desc' => 'tests SDK',
            'currency' => 'USD',
            'amount' => 1000,
            'merchant_data' => [
                'custom_data1' => 'Some string'
            ]
        ];
        $form = \Cloudipsp\Checkout::form($data);
    }

    public function checkoutInfo(){
        $data = [
            'order_desc' => 'tests SDK',
            'currency' => 'USD',
            'amount' => 1000,
            'response_url' => 'http://site.com/responseurl',
            'server_callback_url' => 'http://site.com/callbackurl',
            'sender_email' => 'test@fondy.eu',
            'lang' => 'ru',
            'product_id' => 'some_product_id',
            'lifetime' => 36000,
            'merchant_data' => array(
                'custom_data1' => 'Some string',
                'custom_data2' => '00000000000',
                'custom_data3' => '3!@#$%^&(()_+?"}'
            )
        ];
        $url = \Cloudipsp\Checkout::url($data);
        $data = $url->getData();
    }

    public function refundPayment() {
        $dataToReverse = [
            'currency' => 'USD',
            'amount' => 100,
            'order_id' => '1234'
        ];
        $refundOrder = \Cloudipsp\Order::reverse($dataToReverse);
        var_dump($refundOrder->getData());
    }
}
