<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="https://core.telegram.org/bots/api#games">Game</a>.
 */
final class InlineQueryResultGame extends Data implements TelegramBotData, InlineQueryResult
{
    public function __construct(
        /** Type of the result, must be game */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** Short name of the game */
        public string $game_short_name,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
