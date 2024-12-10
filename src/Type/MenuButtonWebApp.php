<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a menu button, which launches a <a href="/bots/webapps">Web App</a>.
 */
final class MenuButtonWebApp extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Text on the button
         * @var string
         */
        public string $text,
        /**
         * Description of the Web App that will be launched when the user presses the
         * button. The Web App will be able to send an arbitrary message on behalf of the
         * user using the method answerWebAppQuery. Alternatively, a t.me link to a Web App
         * of the bot can be specified in the object instead of the Web App's URL, in which
         * case the Web App will be opened as if the user pressed the link.
         * @var WebAppInfo
         */
        public WebAppInfo $web_app,
        /**
         * Type of the button, must be web_app
         * @var string
         */
        public string $type = 'web_app',
    ) {
    }
}
