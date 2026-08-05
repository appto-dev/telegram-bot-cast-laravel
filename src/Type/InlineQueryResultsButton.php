<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class InlineQueryResultsButton extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Label text on the button */
        public string $text,
        /**
         * @var  WebAppInfo|null  Description of the Web App that will be launched when the user presses the
         * button. The Web App will be able to switch back to the inline mode using the method
         * switchInlineQuery inside the Web App.
         */
        public ?WebAppInfo $web_app,
        /**
         * @var  string|null  Deep-linking parameter for the /start message sent to the bot when a user presses
         * the button. 1-64 characters, only A-Z, a-z, 0-9, _ and - are allowed.Example: An inline bot that
         * sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search
         * results accordingly. To do this, it displays a 'Connect your YouTube account' button above the
         * results, or even before showing any. The user presses the button, switches to a private chat with
         * the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link.
         * Once done, the bot can offer a switch_inline button so that the user can easily return to the chat
         * where they wanted to use the bot's inline capabilities.
         */
        public ?string $start_parameter,
    ) {
    }
}
