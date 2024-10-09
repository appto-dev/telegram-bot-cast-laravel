<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\InputMediaAudio;
use Appto\TelegramBot\Type\InputMediaDocument;
use Appto\TelegramBot\Type\InputMediaPhoto;
use Appto\TelegramBot\Type\InputMediaVideo;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send a group of photos, videos, documents or audios as an
 * album. Documents and audio files can be only grouped in an album with messages
 * of the same type. On success, an array of <a href="#message">Messages</a> that
 * were sent is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class SendMediaGroup extends Data implements TelegramMethodContract
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
         * A JSON-serialized array describing messages to be sent, must include 2-10 items
         * @var InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo
         */
        public InputMediaAudio|InputMediaDocument|InputMediaPhoto|InputMediaVideo $media,
        /**
         * Sends messages silently. Users will receive a notification with no sound.
         * @var bool|null
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent messages from forwarding and saving
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
    ) {
    }
}
