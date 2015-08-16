<?php
require 'gapi.class.php';

$ga = new gapi("candideapp@gmail.com", "candideapp-02c5e99bca08.p12");

$ga->requestAccountData();

foreach($ga->getAccounts() as $result)
{
  echo $result . ' ' . $result->getId() . ' (' . $result->getProfileId() . ")<br />";
}
