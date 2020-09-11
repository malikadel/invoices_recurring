<?php

    require('init.php');
    $customer = \Stripe\Customer::create([
      'name'=>'Adeel Akram',
      'email'=>'adeel.akram.malik@gmail.com'
      ]);  

    $price = \Stripe\Price::create([
      'unit_amount' => '500',
      'currency' => 'usd',
      'product' => 'prod_I0DoRxfqld7EfG',
    ]);    

    \Stripe\InvoiceItem::create([
        'price' => $price->id,
        'customer' => $customer->id,
    ]);
    $invoice = \Stripe\Invoice::create([
        'customer' => $customer->id,
        'collection_method' => 'send_invoice',
        'days_until_due' => 30,
    ]);
    $invoice->sendInvoice();
    echo 'Invoice ID : '.$invoice->id.' <br> '.'Invoice Link '.$invoice->hosted_invoice_url;




?>


​
