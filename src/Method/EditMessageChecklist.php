<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputChecklist;
use Spatie\LaravelData\Data;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note, that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
class EditMessageChecklist extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string  Unique identifier of the business connection on behalf of which the message will be
         * sent
         */
        public string $business_connection_id,
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target bot in the format
         * <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  int  Unique identifier for the target message */
        public int $message_id,
        /** @var  InputChecklist  A JSON-serialized object for the new checklist */
        public InputChecklist $checklist,
        /**
         * @var  InlineKeyboardMarkup|null  A JSON-serialized object for the new
         * <a href="/bots/features#inline-keyboards">inline keyboard</a> for the message
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
