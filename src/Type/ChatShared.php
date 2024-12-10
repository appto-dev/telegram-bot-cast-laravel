<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object contains information about a chat that was shared with the bot using
 * a <a href="#keyboardbuttonrequestchat">KeyboardButtonRequestChat</a> button.
 */
final class ChatShared extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Identifier of the request
         * @var int
         */
        public int $request_id,
        /**
         * Identifier of the shared chat. This number may have more than 32 significant
         * bits and some programming languages may have difficulty/silent defects in
         * interpreting it. But it has at most 52 significant bits, so a 64-bit integer or
         * double-precision float type are safe for storing this identifier. The bot may
         * not have access to the chat and could be unable to use this identifier, unless
         * the chat is already known to the bot by some other means.
         * @var int
         */
        public int $chat_id,
        /**
         * Title of the chat, if the title was requested by the bot.
         * @var string
         */
        public ?string $title,
        /**
         * Username of the chat, if the username was requested by the bot and available.
         * @var string
         */
        public ?string $username,
        /**
         * Available sizes of the chat photo, if the photo was requested by the bot
         * @var PhotoSize[]
         */
        public ?array $photo,
    ) {
    }
}
