<?php

return [
    'recipient' => env('CONTACT_MAIL_TO', env('MAIL_FROM_ADDRESS', 'hello@example.com')),

    'subjects' => [
        'product-inquiry' => 'Product Inquiry',
        'order-support' => 'Order Support',
        'general-question' => 'General Question',
        'recipe-question' => 'Recipe Question',
        'wholesale-partnership' => 'Wholesale / Partnership',
    ],
];
