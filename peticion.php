<?php

require("vendor/autoload.php");
 
$client = new GuzzleHttp\Client();
$response = $client->request('POST', 'http://localhost/api/v1', [
    'form_params' => [
        'field_name' => 'abc',
        'other_field' => '123',
        'nested_field' => [
            'nested' => 'hello'
        ]
    ]
]);
?>

try {
        fscanf(STDIN, "%s", $option);
    } catch (InputMismatchException e) {
        printf("Something went wrong. Try it again:");
        fscanf(STDIN, "%s", $option);
    }