<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Support\Casts\InputMediaCast;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputMedia;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note, that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
class EditEphemeralMessageMedia extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  int|string  Unique identifier for the target chat or username of the target supergroup in the
         * format <code>@username</code>
         */
        public int|string $chat_id,
        /** @var  int  Identifier of the user who received the message */
        public int $receiver_user_id,
        /** @var  int  Identifier of the ephemeral message to edit */
        public int $ephemeral_message_id,
        /**
         * @var  InputMedia  A JSON-serialized object for the new media content of the message. A new file
         * can't be uploaded; use a previously uploaded file via its file_id or specify a URL.
         */
        #[WithCast(InputMediaCast::class)]
        public InputMedia $media,
        /**
         * @var  InlineKeyboardMarkup|null  A JSON-serialized object for an
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
