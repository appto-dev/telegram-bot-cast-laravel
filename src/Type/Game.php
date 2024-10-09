<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a game. Use BotFather to create and edit games, their
 * short names will act as unique identifiers.
 *
 * @version Telegram Bot API 7.10
 */
final class Game extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Title of the game
         * @var string
         */
        public string $title,
        /**
         * Description of the game
         * @var string
         */
        public string $description,
        /**
         * Photo that will be displayed in the game message in chats.
         * @var array<PhotoSize>
         */
        public PhotoSize $photo,
        /**
         * Brief description of the game or high scores included in the game message. Can
         * be automatically edited to include current high scores for the game when the bot
         * calls setGameScore, or manually edited using editMessageText. 0-4096 characters.
         * @var string
         */
        public ?string $text,
        /**
         * Special entities that appear in text, such as usernames, URLs, bot commands,
         * etc.
         * @var array<MessageEntity>
         */
        public ?MessageEntity $text_entities,
        /**
         * Animation that will be displayed in the game message in chats. Upload via
         * BotFather
         * @var Animation
         */
        public ?Animation $animation,
    ) {
    }
}
