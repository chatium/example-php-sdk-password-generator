<?php namespace Screens;

use function Chatium\Actions\apiCall;
use function Chatium\Blocks\Button;
use function Chatium\Blocks\Screen;
use function Chatium\Blocks\Text;
use function Chatium\Responses\ScreenResponse;

class Main {
    static function render() {
        return ScreenResponse(
            Screen(['title' => 'Make password great again!'], [
                Text([
                    'id' => 'password',
                    'text' => 'Press generate button',
                    'fontSize' => 'xxlarge',
                    'styles' => [['textAlign' => 'center']],
                    'containerStyle' => [
                        'paddingTop' => 100,
                        'paddingBottom' => 100,
                    ],
                ]),
                Button([
                    'title' => 'Generate password now!',
                    'onClick' => apiCall('/generate'),
                ]),
            ])
        );
    }
}
