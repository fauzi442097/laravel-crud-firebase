<?php

return [

    'default' => env('DB_CONNECTION', 'firebase'),

    'connections' => [

        'firebase' => [
            'apiKey' => env('FIREBASE_API_KEY', 'AIzaSyDeSnA7GATzYskrmKg9XCqtCO4z3qsB5FI'),
            'authDomain' => env('FIREBASE_AUTH_DOMAIN', 'crud-api-85d6b.firebaseapp.com'),
            'projectId' => env('FIREBASE_PROJECT_ID', 'crud-api-85d6b'),
            'storageBucket' => env('FIREBASE_STORAGE_BUCKET', 'crud-api-85d6b.appspot.com'),
            'messagingSenderId' => env('FIREBASE_MESSAGE_SENDER_ID', '1003225183539'),
            'appId' => env('FIREBASE_APP_ID', '1:1003225183539:web:ab6a2ec8037c60abb2fa46'),
            'measurementId' => env('FIREBASE_MEASUREMENT_ID', 'G-0RSXEVPT9M'),
        ],

    ],

    'migrations' => 'migrations',
];
