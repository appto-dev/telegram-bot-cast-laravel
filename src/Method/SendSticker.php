<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputFile;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send static .WEBP, <a
 * href="https://telegram.org/blog/animated-stickers">animated</a> .TGS, or <a
 * href="https://telegram.org/blog/video-stickers-better-reactions">video</a> .WEBM
 * stickers. On success, the sent <a href="#message">Message</a> is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class SendSticker extends Data implements TelegramMethodContract
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
         * format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         * @var int|null
         */
        public ?int $message_thread_id,
        /**
         * Sticker to send. Pass a file_id as String to send a file that exists on the
         * Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get
         * a .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker
         * using multipart/form-data. More information on Sending Files . Video and
         * animated stickers can't be sent via an HTTP URL.
         * @var InputFile|string
         */
        public InputFile|string $sticker,
        /**
         * Emoji associated with the sticker; only for just uploaded stickers
         * @var string|null
         */
        public ?string $emoji,
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
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         * @var string|null
         */
        public ?string $message_effect_id,
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
