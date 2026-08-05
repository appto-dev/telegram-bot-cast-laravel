<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Spatie\LaravelData\Data;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note, that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
class StopPoll extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the message to be
         * edited was sent
         */
        public ?string $business_connection_id,
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot, supergroup or
         * channel in the format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  int  Identifier of the original message with the poll */
        public int $message_id,
        /**
         * @var  InlineKeyboardMarkup|null  A JSON-serialized object for a new message
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
