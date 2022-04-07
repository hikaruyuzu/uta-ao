<?php

require_once "data/Programmer.php";

use CompanySDM\{Programmer, ProgrammerFrontEnd, ProgrammerBackend};
use function CompanySDM\{sayHelloProgrammer};

// disini kita bisa menggunakan apa-apa saja yang merupakan turunana dari class company
$company = new Programmer("Yuzuko Hikaru");
var_dump($company);

$company = new ProgrammerFrontEnd("Yuzuko Hikaru");
var_dump($company);


$company = new ProgrammerBackend("Yuzuko Hikaru");
var_dump($company);

sayHelloProgrammer(new ProgrammerFrontEnd("Yuzuko Hikaru"));
sayHelloProgrammer(new ProgrammerBackend("Yuzuko Hikaru"));


