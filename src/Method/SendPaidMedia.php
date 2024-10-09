<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputPaidMedia;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send paid media. On success, the sent <a
 * href="#message">Message</a> is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class SendPaidMedia extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         * @var string|null
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername). If the chat is a channel, all Telegram Star proceeds
         * from this media will be credited to the chat's balance. Otherwise, they will be
         * credited to the bot's balance.
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * The number of Telegram Stars that must be paid to buy access to the media;
         * 1-2500
         * @var int
         */
        public int $star_count,
        /**
         * A JSON-serialized array describing the media to be sent; up to 10 items
         * @var InputPaidMedia
         */
        public InputPaidMedia $media,
        /**
         * Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the
         * user, use it for your internal processes.
         * @var string|null
         */
        public ?string $payload,
        /**
         * Media caption, 0-1024 characters after entities parsing
         * @var string|null
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the media caption. See formatting options for more
         * details.
         * @var string|null
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption, which can
         * be specified instead of parse_mode
         * @var MessageEntity|null
         */
        public ?MessageEntity $caption_entities,
        /**
         * Pass True, if the caption must be shown above the message media
         * @var bool|null
         */
        public ?bool $show_caption_above_media,
        /**
         * Sends the message silently. Users will receive a notification with no sound.
         * @var bool|null
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent message from forwarding and saving
         * @var bool|null
         */
        public ?bool $protect_content,
        /**
         * Description of the message to reply to
         * @var ReplyParameters|null
         */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an inline keyboard,
         * custom reply keyboard, instructions to remove a reply keyboard or to force a
         * reply from the user
         * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}
