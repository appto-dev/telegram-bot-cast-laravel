<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\MessageEntity;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit captions of messages. On success, if the edited message
 * is not an inline message, the edited <a href="#message">Message</a> is returned,
 * otherwise <em>True</em> is returned. Note that business messages that were not
 * sent by the bot and do not contain an inline keyboard can only be edited within
 * 48 hours from the time they were sent.
 *
 * @version Telegram Bot API 7.10
 */
final class EditMessageCaption extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message to
         * be edited was sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Unique identifier for
         * the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         * @var int|string
         */
        public int|string|null $chat_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Identifier of the
         * message to edit
         * @var int
         */
        public ?int $message_id,
        /**
         * Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message
         * @var string
         */
        public ?string $inline_message_id,
        /**
         * New caption of the message, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the message caption. See <a
         * href="#formatting-options">formatting options</a> for more details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption, which can
         * be specified instead of <em>parse_mode</em>
         * @var MessageEntity[]
         */
        public ?array $caption_entities,
        /**
         * Pass <em>True</em>, if the caption must be shown above the message media.
         * Supported only for animation, photo and video messages.
         * @var bool
         */
        public ?bool $show_caption_above_media,
        /**
         * A JSON-serialized object for an <a href="/bots/features#inline-keyboards">inline
         * keyboard</a>.
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
