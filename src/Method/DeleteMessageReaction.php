<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note, that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
class DeleteMessageReaction extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target supergroup in the
         * format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  int  Identifier of the target message */
        public int $message_id,
        /**
         * @var  int|null  Identifier of the user whose reaction will be removed, if the reaction was added by
         * a user
         */
        public ?int $user_id,
        /**
         * @var  int|null  Identifier of the chat whose reaction will be removed, if the reaction was added by
         * a chat
         */
        public ?int $actor_chat_id,
    ) {
    }
}
