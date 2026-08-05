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
class ApproveSuggestedPost extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Unique identifier for the target direct messages chat */
        public int $chat_id,
        /** @var  int  Identifier of a suggested post message to approve */
        public int $message_id,
        /**
         * @var  int|null  Point in time (Unix timestamp) when the post is expected to be published; omit if
         * the date has already been specified when the suggested post was created. If specified, then the date
         * must be not more than 2678400 seconds (30 days) in the future.
         */
        public ?int $send_date,
    ) {
    }
}
