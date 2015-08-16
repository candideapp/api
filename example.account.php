<?php
require 'gapi.class.php';

$ga = new gapi("candideapp@gmail.com", "candideapp-ac0b7c3542de");

$ga->requestAccountData();

foreach($ga->getAccounts() as $result)
{
  echo $result . ' ' . $result->getId() . ' (' . $result->getProfileId() . ")<br />";
}
