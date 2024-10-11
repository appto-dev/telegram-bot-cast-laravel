<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get data for high score tables. Will return the score of the
 * specified user and several of their neighbors in a game. Returns an Array of <a
 * href="#gamehighscore">GameHighScore</a> objects.
 * This method will currently return scores for the target user, plus two of their
 * closest neighbors on each side. Will also return the top three users if the user
 * and their neighbors are not among them. Please note that this behavior is
 * subject to change.
 *
 * @version Telegram Bot API 7.10
 */
final class GetGameHighScores extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Target user id
         * @var int
         */
        public int $user_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Unique identifier for
         * the target chat
         * @var int
         */
        public ?int $chat_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Identifier of the sent
         * message
         * @var int
         */
        public ?int $message_id,
        /**
         * Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message
         * @var string
         */
        public ?string $inline_message_id,
    ) {
    }
}
