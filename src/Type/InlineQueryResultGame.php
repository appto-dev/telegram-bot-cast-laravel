<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="#games">Game</a>.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultGame extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * Short name of the game
         * @var string
         */
        public string $game_short_name,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Type of the result, must be game
         * @var string
         */
        public string $type = 'game',
    ) {
    }
}
