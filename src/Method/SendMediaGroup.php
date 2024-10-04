<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\InputMediaAudio;
use ApptoTeam\TelegramBotCastLaravel\Type\InputMediaDocument;
use ApptoTeam\TelegramBotCastLaravel\Type\InputMediaPhoto;
use ApptoTeam\TelegramBotCastLaravel\Type\InputMediaVideo;
use ApptoTeam\TelegramBotCastLaravel\Type\Message;
use ApptoTeam\TelegramBotCastLaravel\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * SendMediaGroup
 *
 * Use this method to send a group of photos, videos, documents or audios as an
 * album. Documents and audio files can be only grouped in an album with messages
 * of the same type. On success, an array of Messages that were sent is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SendMediaGroup extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = [Message::class];

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
         * A JSON-serialized array describing messages to be sent, must include
         * 2-10 items
         * @var array<InputMediaAudio>
         * @var array<InputMediaDocument>
         * @var array<InputMediaPhoto>
         * @var array<InputMediaVideo>
         */
        public array $media,
        /**
         * Sends messages silently. Users will receive a notification with no
         * sound.
         */
        public ?bool $disable_notification,
        /** Protects the contents of the sent messages from forwarding and saving */
        public ?bool $protect_content,
        /** Description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
    ) {
    }
}