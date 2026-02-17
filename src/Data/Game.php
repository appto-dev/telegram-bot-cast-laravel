<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique
 * identifiers.
 */
final class Game extends Data implements TelegramBotData
{
    public function __construct(
        /** Title of the game */
        public string $title,
        /** Description of the game */
        public string $description,
        /** Photo that will be displayed in the game message in chats. */
        public PhotoSize $photo,
        /**
         * Brief description of the game or high scores included in the game message. Can be automatically edited to
         * include current high scores for the game when the bot calls setGameScore, or manually edited using
         * editMessageText. 0-4096 characters.
         */
        public ?string $text,
        /** Special entities that appear in text, such as usernames, URLs, bot commands, etc. */
        public ?MessageEntity $text_entities,
        /** Animation that will be displayed in the game message in chats. Upload via BotFather */
        public ?Animation $animation,
    ) {
    }
}
