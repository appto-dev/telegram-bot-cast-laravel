<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
class EditMessageWidgetData extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string|null  Required if <em>inline_message_id</em> is not specified. Unique identifier
         * for the target chat or username of the target supergroup in the format <code>@username</code>.
         */
        public int|string|null $chat_id,
        /**
         * @var  int|null  Required if <em>inline_message_id</em> is not specified. Identifier of the message
         * with the widget.
         */
        public ?int $message_id,
        /**
         * @var  string|null  Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message.
         */
        public ?string $inline_message_id,
        /**
         * @var  string|null  New public data of the widget, 0-1024 bytes; pass an empty string to remove the
         * public data. If omitted, then the public data isn't changed.
         */
        public ?string $public_data,
        /**
         * @var  string|null  New data of the widget, which is specific to the message, 0-1024 bytes; pass an
         * empty string to remove the data. If omitted, then the data isn't changed.
         */
        public ?string $chat_data,
    ) {
    }
}
