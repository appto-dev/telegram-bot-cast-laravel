<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputRichMessage;
use Appto\TelegramBot\Type\LinkPreviewOptions;
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
class EditMessageText extends Data implements TelegramMethod
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
        /**
         * @var  string|null  New text of the message, 1-4096 characters after entity parsing; required if
         * <em>rich_message</em> isn't specified
         */
        public ?string $text,
        /**
         * @var  string|null  Mode for parsing entities in the message text. See
         * <a href="#formatting-options">formatting options</a> for more details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  A JSON-serialized list of special entities that appear in message text,
         * which can be specified instead of <em>parse_mode</em>
         */
        public ?array $entities,
        /** @var  LinkPreviewOptions|null  Link preview generation options for the message */
        public ?LinkPreviewOptions $link_preview_options,
        /**
         * @var  InputRichMessage|null  New rich content of the message; required if <em>text</em> isn't
         * specified. Direct upload of new files isn't supported when an inline message is edited.
         */
        public ?InputRichMessage $rich_message,
        /**
         * @var  InlineKeyboardMarkup|null  A JSON-serialized object for an
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
