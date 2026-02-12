<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MenuButton;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a menu button, which launches a <a
 * href="https://core.telegram.org/bots/webapps">Web App</a>.
 */
final class MenuButtonWebApp extends Data implements TelegramBotData, MenuButton
{
    public function __construct(
        /** Type of the button, must be web_app */
        public string $type,
        /** Text on the button */
        public string $text,
        /**
         * Description of the Web App that will be launched when the user presses the
         * button. The Web App will be able to send an arbitrary message on behalf of the
         * user using the method answerWebAppQuery. Alternatively, a t.me link to a Web App
         * of the bot can be specified in the object instead of the Web App's URL, in which
         * case the Web App will be opened as if the user pressed the link.
         */
        public WebAppInfo $web_app,
    ) {
    }
}
