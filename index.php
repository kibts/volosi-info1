<?php
require_once 'kclick_client.php';
$client = new KClickClient('https://waeeaw.comptinser.pw/api.php?sub_id_1={sub_id_1}&sub_id_2={sub_id_2}&sub_id_3={sub_id_3}', 'zblqnxfrjwb5n1ntb7xmpffffptsfy17');
$client->sendAllParams();       // to send all params from page query
$client->params('sub_id_1={sub_id_1}&sub_id_2={sub_id_2}&sub_id_3={sub_id_3}');  // send params like param1=c&param2=b
// $client->sendUtmLabels();     // to send only utm labels
// $client->debug();              // to enable debug mode and show the errors
// $client->currentPageAsReferrer(); // to send current page as referrer value
// $client->keyword('KEYWORD');  // send custom keyword
// $client->param('extra_param_5', '123'); // you can send any params
$client->execute();             // request to api, show the output and continue
// $client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
