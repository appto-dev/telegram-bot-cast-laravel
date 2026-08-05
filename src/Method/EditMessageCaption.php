<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\MessageEntity;
use Spatie\LaravelData\Data;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note, that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
class EditMessageCaption extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the message to be
         * edited was sent
         */
        public ?string $business_connection_id,
        /**
         * @var  int|string|null  Required if <em>inline_message_id</em> is not specified. Unique identifier
         * for the target chat or username of the target bot, supergroup or channel in the format
         * <code>@username</code>.
         */
        public int|string|null $chat_id,
        /**
         * @var  int|null  Required if <em>inline_message_id</em> is not specified. Identifier of the message
         * to edit.
         */
        public ?int $message_id,
        /**
         * @var  string|null  Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message.
         */
        public ?string $inline_message_id,
        /** @var  string|null  New caption of the message, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * @var  string|null  Mode for parsing entities in the message caption. See
         * <a href="#formatting-options">formatting options</a> for more details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  A JSON-serialized list of special entities that appear in the caption,
         * which can be specified instead of <em>parse_mode</em>
         */
        public ?array $caption_entities,
        /**
         * @var  bool|null  Pass <em>True</em> if the caption must be shown above the message media. Supported
         * only for animation, photo and video messages.
         */
        public ?bool $show_caption_above_media,
        /**
         * @var  InlineKeyboardMarkup|null  A JSON-serialized object for an
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
