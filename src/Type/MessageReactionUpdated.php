<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class MessageReactionUpdated extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat  The chat containing the message the user reacted to */
        public Chat $chat,
        /** @var  int  Unique identifier of the message inside the chat */
        public int $message_id,
        /** @var  User|null  The user that changed the reaction, if the user isn't anonymous */
        public ?User $user,
        /** @var  Chat|null  The chat on behalf of which the reaction was changed, if the user is anonymous */
        public ?Chat $actor_chat,
        /** @var  int  Date of the change in Unix time */
        public int $date,
        /** @var  ReactionType[]  Previous list of reaction types that were set by the user */
        public array $old_reaction,
        /** @var  ReactionType[]  New list of reaction types that have been set by the user */
        public array $new_reaction,
    ) {
    }
}
