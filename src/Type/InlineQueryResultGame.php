<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * InlineQueryResultGame
 *
 * Represents a Game.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class InlineQueryResultGame extends Data implements TypeInterface
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
