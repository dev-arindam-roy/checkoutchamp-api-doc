<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('checkoutchamp-api-doc', function() {
    return Redirect::to('https://konnektive.atlassian.net/wiki/spaces/CC/pages/1859551570/Checkout+Champ');
});
