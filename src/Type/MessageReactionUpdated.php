<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a change of a reaction on a message performed by a user.
 *
 * @version Telegram Bot API 7.10
 */
final class MessageReactionUpdated extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The chat containing the message the user reacted to
         * @var Chat
         */
        public Chat $chat,
        /**
         * Unique identifier of the message inside the chat
         * @var int
         */
        public int $message_id,
        /**
         * The user that changed the reaction, if the user isn't anonymous
         * @var User
         */
        public ?User $user,
        /**
         * The chat on behalf of which the reaction was changed, if the user is anonymous
         * @var Chat
         */
        public ?Chat $actor_chat,
        /**
         * Date of the change in Unix time
         * @var int
         */
        public int $date,
        /**
         * Previous list of reaction types that were set by the user
         * @var ReactionType[]
         */
        public array $old_reaction,
        /**
         * New list of reaction types that have been set by the user
         * @var ReactionType[]
         */
        public array $new_reaction,
    ) {
    }
}
