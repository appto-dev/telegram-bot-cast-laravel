<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\ReactionType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\ReactionTypeResolve;
use Spatie\LaravelData\Data;

/**
 * This object represents a change of a reaction on a message performed by a user.
 */
final class MessageReactionUpdated extends Data implements TelegramBotData
{
    public function __construct(
        /** The chat containing the message the user reacted to */
        public Chat $chat,
        /** Unique identifier of the message inside the chat */
        public int $message_id,
        /** The user that changed the reaction, if the user isn't anonymous */
        public ?User $user,
        /** The chat on behalf of which the reaction was changed, if the user is anonymous */
        public ?Chat $actor_chat,
        /** Date of the change in Unix time */
        public int $date,
        /**
         * Previous list of reaction types that were set by the user
         * @var array<ReactionType>
         */
        public array $old_reaction,
        /**
         * New list of reaction types that have been set by the user
         * @var array<ReactionType>
         */
        public array $new_reaction,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (isset($properties['old_reaction']) || $properties['old_reaction']) {
            $properties['old_reaction'] = (new ReactionTypeResolve())->resolve($properties['old_reaction']);
        }

        if (isset($properties['new_reaction']) || $properties['new_reaction']) {
            $properties['new_reaction'] = (new ReactionTypeResolve())->resolve($properties['new_reaction']);
        }

        return $properties;
    }
}
