<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class MenuButtonWebApp extends Data implements TelegramType, MenuButton
{
    public function __construct(
        /** @var  string  Type of the button, must be web_app */
        public string $type,
        /** @var  string  Text on the button */
        public string $text,
        /**
         * @var  WebAppInfo  Description of the Web App that will be launched when the user presses the button.
         * The Web App will be able to send an arbitrary message on behalf of the user using the method
         * answerWebAppQuery. Alternatively, a t.me link to a Web App of the bot can be specified in the object
         * instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the
         * link.
         */
        public WebAppInfo $web_app,
    ) {
    }
}
