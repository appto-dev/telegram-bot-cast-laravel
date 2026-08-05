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
class InlineQueryResultGame extends Data implements TelegramType, InlineQueryResult
{
    public function __construct(
        /** @var  string  Type of the result, must be game */
        public string $type,
        /** @var  string  Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** @var  string  Short name of the game */
        public string $game_short_name,
        /** @var  InlineKeyboardMarkup|null  Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
