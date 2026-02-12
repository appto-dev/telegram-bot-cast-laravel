<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get data for high score tables. Will return the score of the
 * specified user and several of their neighbors in a game. Returns an Array of <a
 * href="https://core.telegram.org/bots/api#gamehighscore">GameHighScore</a>
 * objects.
 * This method will currently return scores for the target user, plus two of their
 * closest neighbors on each side. Will also return the top three users if the user
 * and their neighbors are not among them. Please note that this behavior is
 * subject to change.
 */
final class GetGameHighScores extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Target user id */
        public int $user_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Unique identifier for
         * the target chat
         */
        public ?int $chat_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Identifier of the sent
         * message
         */
        public ?int $message_id,
        /**
         * Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message
         */
        public ?string $inline_message_id,
    ) {
    }
}
