<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to set the score of the specified user in a game message. On success, if the message is not an inline
 * message, the <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is
 * returned. Returns an error, if the new score is not greater than the user's current score in the chat and <em>force</em>
 * is <em>False</em>.
 */
final class SetGameScore extends Dto implements TelegramBotDto
{
    public function __construct(
        /** User identifier */
        public int $user_id,
        /** New score, must be non-negative */
        public int $score,
        /** Pass <em>True</em> if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters */
        public ?bool $force,
        /** Pass <em>True</em> if the game message should not be automatically edited to include the current scoreboard */
        public ?bool $disable_edit_message,
        /** Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat */
        public ?int $chat_id,
        /** Required if <em>inline_message_id</em> is not specified. Identifier of the sent message */
        public ?int $message_id,
        /** Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message */
        public ?string $inline_message_id,
    ) {
    }
}
