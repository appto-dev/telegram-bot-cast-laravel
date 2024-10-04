<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ForceReply;
use ApptoTeam\TelegramBotCastLaravel\Type\InlineKeyboardMarkup;
use ApptoTeam\TelegramBotCastLaravel\Type\InputFile;
use ApptoTeam\TelegramBotCastLaravel\Type\Message;
use ApptoTeam\TelegramBotCastLaravel\Type\MessageEntity;
use ApptoTeam\TelegramBotCastLaravel\Type\ReplyKeyboardMarkup;
use ApptoTeam\TelegramBotCastLaravel\Type\ReplyKeyboardRemove;
use ApptoTeam\TelegramBotCastLaravel\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * SendDocument
 *
 * Use this method to send general files. On success, the sent Message is returned.
 * Bots can currently send files of any type of up to 50 MB in size, this limit may
 * be changed in the future.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SendDocument extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = Message::class;

    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the
         * message will be sent
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target
         * channel (in the format @channelusername)
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum;
         * for forum supergroups only
         */
        public ?int $message_thread_id,
        /**
         * File to send. Pass a file_id as String to send a file that exists on
         * the Telegram servers (recommended), pass an HTTP URL as a String for
         * Telegram to get a file from the Internet, or upload a new one using
         * multipart/form-data. More information on Sending Files »
         */
        public InputFile|string $document,
        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for
         * the file is supported server-side. The thumbnail should be in JPEG
         * format and less than 200 kB in size. A thumbnail's width and height
         * should not exceed 320. Ignored if the file is not uploaded using
         * multipart/form-data. Thumbnails can't be reused and can be only
         * uploaded as a new file, so you can pass "attach://<file_attach_name>"
         * if the thumbnail was uploaded using multipart/form-data under
         * <file_attach_name>. More information on Sending Files »
         */
        public InputFile|string|null $thumbnail,
        /**
         * Document caption (may also be used when resending documents by
         * file_id), 0-1024 characters after entities parsing
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the document caption. See formatting
         * options for more details.
         */
        public ?string $parse_mode,
        /**
         * A JSON-serialized list of special entities that appear in the caption,
         * which can be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /**
         * Disables automatic server-side content type detection for files
         * uploaded using multipart/form-data
         */
        public ?bool $disable_content_type_detection,
        /**
         * Sends the message silently. Users will receive a notification with no
         * sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an inline
         * keyboard, custom reply keyboard, instructions to remove a reply
         * keyboard or to force a reply from the user. Not supported for messages
         * sent on behalf of a business account
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}