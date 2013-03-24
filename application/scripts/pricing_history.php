<?php 
# TEST USER
# {"id":135438957,"nickname":"TT093590","password":"qatest1076","site_status":"active","email":"test_user_65685335@testuser.com"}

error_reporting(E_ALL);
# stuff to do:
# SELLER_ID = USER_ID ? 
# get the products for each of our accts (private)
# https://api.mercadolibre.com/sites/MLA/search?nickname=<ACCT_NICK>
# get the price for each of the products (public)
# https://api.mercadolibre.com/items/MLA448629676
# get the info for each of the buyers of the products of every acct.
# preguntas sobre un prod
# https://api.mercadolibre.com/questions/search?item=MLA453633436
# https://api.mercadolibre.com/my/received_questions/search?access_token=APP_USR-7876236325142995-032316-60ed6debd05c10856d621da4205407a8__E_H__-79832711
# receive the notification in the web

/*
curl -X POST -H "Content-Type: application/json" -d '{"site_id":"MLA"}' https://api.mercadolibre.com/users/test_user?access_token=APP_USR-7876236325142995-032316-60ed6debd05c10856d621da4205407a8__E_H__-79832711

*/

// Try to put this code at the top
require '../libraries/php-sdk-master/src/meli.php';

// Create our Application instance (replace this with your appId and secret).
$meli = new Meli(array(
    'appId'         => '7876236325142995',
    'secret'        => 'nxJhkhGsO2kXWCBOR8gypk44zqV2eEeh',
    'client_id'         => 'APP_USR-10115-032318-814190763e65a44cfd533f1b97a96856__K_M__-67413358',
));
$meli->initConnect();

print_r($meli->getWithAccessToken("/users/me/"));
print_r($meli->get("/orders/search/recent?seller=67413358&access_token=APP_USR-10115-032318-814190763e65a44cfd533f1b97a96856__K_M__-67413358"));
echo '1';



function get_items_from_seller($seller_id) { }

