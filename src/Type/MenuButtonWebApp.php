<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * MenuButtonWebApp
 *
 * Represents a menu button, which launches a Web App.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MenuButtonWebApp extends Dto implements TypeInterface
{
    public function __construct(
        /** Type of the button, must be web_app */
        public string $type,
        /** Text on the button */
        public string $text,
        /**
         * Description of the Web App that will be launched when the user presses
         * the button. The Web App will be able to send an arbitrary message on
         * behalf of the user using the method answerWebAppQuery.
         */
        public WebAppInfo $web_app,
    ) {
    }
}
