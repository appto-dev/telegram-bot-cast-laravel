<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
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
final class SendPaidMedia extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>). If the chat is a channel, all Telegram
         * Star proceeds from this media will be credited to the chat's balance. Otherwise,
         * they will be credited to the bot's balance.
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
         * @var InputPaidMedia[]
         */
        public array $media,
        /**
         * Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the
         * user, use it for your internal processes.
         * @var string
         */
        public ?string $payload,
        /**
         * Media caption, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the media caption. See <a
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
         * Pass <em>True</em>, if the caption must be shown above the message media
         * @var bool
         */
        public ?bool $show_caption_above_media,
        /**
         * Sends the message <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent message from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Description of the message to reply to
         * @var ReplyParameters
         */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>, <a
         * href="/bots/features#keyboards">custom reply keyboard</a>, instructions to
         * remove a reply keyboard or to force a reply from the user
         * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}
