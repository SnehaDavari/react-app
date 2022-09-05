<?php

require_once 'vendor/autoload.php';
Requests::register_autoloader();

var_dump($argv);
var_dump($_ENV);

// $response = Requests::post(
//      "https://hooks.slack.com/services/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",
//     array(
//         'Content-type' => 'application/json'
//     ),
//     json_encode(array (
//         'blocks' => 
//         array (
//             array (
//                 "type" => "section",
//                 "text" => array (
//                     "type" => "mrkdwn",
//                     "text" => "You have a new request:\n*<fakeLink.toEmployeeProfile.com|Fred Enriquez - New device request>*",
//                 ),
                
                
//                 ),
//             ),
//             array (
//                 "type" => "section",
//                 "fields" => array (
//                     array (
//                         "type" => "mrkdwn",
//                         "text" => "*Type:*\nComputer (laptop)",
//                     ),
//                     array (
//                         "type" => "mrkdwn",
//                         "text" => "*When:*\nSubmitted Aut 10",
//                     ),
                    
                     
//                 ),
//             ),
//         )
//     )
// );         

// var_dump($response);

// if(!$response->success) {
//     echo $response->body;
// }