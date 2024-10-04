<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * InlineQueryResultsButton
 *
 * This object represents a button to be shown above inline query results. You must
 * use exactly one of the optional fields.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class InlineQueryResultsButton extends Dto implements TypeInterface
{
    public function __construct(
        /** Label text on the button */
        public string $text,
        /**
         * Description of the Web App that will be launched when the user presses
         * the button. The Web App will be able to switch back to the inline mode
         * using the method switchInlineQuery inside the Web App.
         */
        public ?WebAppInfo $web_app,
        /**
         * Deep-linking parameter for the /start message sent to the bot when a
         * user presses the button. 1-64 characters, only A-Z, a-z, 0-9, _ and -
         * are allowed.Example: An inline bot that sends YouTube videos can ask
         * the user to connect the bot to their YouTube account to adapt search
         * results accordingly. To do this, it displays a 'Connect your YouTube
         * account' button above the results, or even before showing any. The
         * user presses the button, switches to a private chat with the bot and,
         * in doing so, passes a start parameter that instructs the bot to return
         * an OAuth link. Once done, the bot can offer a switch_inline button so
         * that the user can easily return to the chat where they wanted to use
         * the bot's inline capabilities.
         */
        public ?string $start_parameter,
    ) {
    }
}