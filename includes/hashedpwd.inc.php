<?php

$sensitiveData = "Something";

$salt = bin2hex(random_bytes(16)); //Generate random salt;
$pepper = "ASecretPepperString";