<?php namespace ApiCalls;

use function Chatium\Actions\copyToClipboard;
use function Chatium\Actions\updateCurrentScreenBlock;
use function Chatium\Responses\ApiCallResponse;

class Generate {
    static function call() {
        $password = generateString(16);

        return ApiCallResponse([
            updateCurrentScreenBlock('password', ['text' => $password]),
            copyToClipboard($password),
        ]);
    }
}

function generateString($strength = 16) {
    $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}
