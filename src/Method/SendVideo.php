<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputFile;
use Appto\TelegramBot\Type\MessageEntity;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send video files, Telegram clients support MPEG4 videos
 * (other formats may be sent as <a href="#document">Document</a>). On success, the
 * sent <a href="#message">Message</a> is returned. Bots can currently send video
 * files of up to 50 MB in size, this limit may be changed in the future.
 *
 * @version Telegram Bot API 7.10
 */
final class SendVideo extends Data implements TelegramMethodContract
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
         * Video to send. Pass a file_id as String to send a video that exists on the
         * Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get
         * a video from the Internet, or upload a new video using multipart/form-data. More
         * information on Sending Files
         * @var InputFile|string
         */
        public InputFile|string $video,
        /**
         * Duration of sent video in seconds
         * @var int|null
         */
        public ?int $duration,
        /**
         * Video width
         * @var int|null
         */
        public ?int $width,
        /**
         * Video height
         * @var int|null
         */
        public ?int $height,
        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file
         * is supported server-side. The thumbnail should be in JPEG format and less than
         * 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if
         * the file is not uploaded using multipart/form-data. Thumbnails can't be reused
         * and can be only uploaded as a new file, so you can pass
         * "attach://<file_attach_name>" if the thumbnail was uploaded using
         * multipart/form-data under <file_attach_name>. More information on Sending Files
         * @var InputFile|string|null
         */
        public InputFile|string|null $thumbnail,
        /**
         * Video caption (may also be used when resending videos by file_id), 0-1024
         * characters after entities parsing
         * @var string|null
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the video caption. See formatting options for more
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
         * Pass True if the video needs to be covered with a spoiler animation
         * @var bool|null
         */
        public ?bool $has_spoiler,
        /**
         * Pass True if the uploaded video is suitable for streaming
         * @var bool|null
         */
        public ?bool $supports_streaming,
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
