<?php

require('vendor/autoload.php');

$mailerliteClient = new \MailerLiteApi\MailerLite('your-api-key');

$groupsApi = $mailerliteClient->groups();
$groups = $groupsApi->get(); // returns array of groups

$fieldsApi = $mailerliteClient->fields();
$fields = $fieldsApi->get(); // returns array of fields

print_r($groups);