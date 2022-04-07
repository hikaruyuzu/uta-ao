<?php

require_once "data/Account.php";

use Data\{Account, AccountPremium};

$user1 = new Account("@yuzukohikaru", "Shibuya, Japan");
echo $user1->getDataAccount() . PHP_EOL;

$user2 = new AccountPremium("@kaguyachan");
echo $user2->getDataAccount();
