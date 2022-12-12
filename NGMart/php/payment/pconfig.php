<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51ME3lDLHq8jMZeN9gtwWUtXVjaZY3S4uuPXTwYLgdEdGglSMCQzqhAv64zAeNhVhFXtj7CPe2dlhLtDNa7ArghWk00Y7VOrtVQ";

$secretKey="sk_test_51ME3lDLHq8jMZeN9iDnAq4VjVzBeA7SDnqKhF4JhHWB6j5ZXZCCiih5AfbIf7ZmYV1gR15P3OQ4Qv1krZwQbdajv00RJjetvJ5";

\Stripe\Stripe::setApiKey($secretKey);
?>