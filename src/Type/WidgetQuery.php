<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\WidgetQueryTypeCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class WidgetQuery extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier for this query */
        public string $id,
        /** @var  User  Sender */
        public User $from,
        /**
         * @var  Chat|null  Chat with the message containing the widget; omitted if the widget is in an inline
         * message
         */
        public ?Chat $chat,
        /**
         * @var  int|null  Identifier of the message containing the widget; omitted if the widget is in an
         * inline message
         */
        public ?int $message_id,
        /** @var  string|null  Identifier of the inline message containing the widget */
        public ?string $inline_message_id,
        /**
         * @var  string  Global identifier, uniquely corresponding to the chat to which the message with the
         * widget was sent
         */
        public string $chat_instance,
        /**
         * @var  string|null  For widgets in inline messages, type of the chat to which the message was sent.
         * Can be either "sender" for a private chat with the inline query sender, "private", "group",
         * "supergroup", or "channel".
         */
        public ?string $chat_type,
        /** @var  WidgetQueryType  Type of the query */
        #[WithCast(WidgetQueryTypeCast::class)]
        public WidgetQueryType $type,
        /** @var  string  Data of the query, 1-64 bytes */
        public string $data,
        /**
         * @var  string|null  Unique identifier of the shared widget, which sent the query; omitted if the
         * widget isn't shared
         */
        public ?string $widget_id,
    ) {
    }
}
