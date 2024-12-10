<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to set the score of the specified user in a game message. On
 * success, if the message is not an inline message, the <a
 * href="#message">Message</a> is returned, otherwise <em>True</em> is returned.
 * Returns an error, if the new score is not greater than the user's current score
 * in the chat and <em>force</em> is <em>False</em>.
 */
final class SetGameScore extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * User identifier
         * @var int
         */
        public int $user_id,
        /**
         * New score, must be non-negative
         * @var int
         */
        public int $score,
        /**
         * Pass <em>True</em> if the high score is allowed to decrease. This can be useful
         * when fixing mistakes or banning cheaters
         * @var bool
         */
        public ?bool $force,
        /**
         * Pass <em>True</em> if the game message should not be automatically edited to
         * include the current scoreboard
         * @var bool
         */
        public ?bool $disable_edit_message,
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
