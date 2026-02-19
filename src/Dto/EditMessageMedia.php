<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InlineKeyboardMarkup;
use Appto\TelegramBot\Interfaces\InputMedia;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Appto\TelegramBot\Support\Resolvers\InputMediaResolver;
use Spatie\LaravelData\Dto;

/**
 * Use this method to edit animation, audio, document, photo, or video messages, or to add media to text messages. If a
 * message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for
 * document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use
 * a previously uploaded file via its file_id or specify a URL. On success, if the edited message is not an inline message,
 * the edited <a href="https://core.telegram.org/bots/api#message">Message</a> is returned, otherwise <em>True</em> is
 * returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be
 * edited within 48 hours from the time they were sent.
 */
final class EditMessageMedia extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection on behalf of which the message to be edited was sent */
        public ?string $business_connection_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Unique identifier for the target chat or username of the target
         * channel (in the format <code>@channelusername</code>)
         */
        public int|string|null $chat_id,
        /** Required if <em>inline_message_id</em> is not specified. Identifier of the message to edit */
        public ?int $message_id,
        /** Required if <em>chat_id</em> and <em>message_id</em> are not specified. Identifier of the inline message */
        public ?string $inline_message_id,
        /** A JSON-serialized object for a new media content of the message */
        public InputMedia $media,
        /** A JSON-serialized object for a new <a href="/bots/features#inline-keyboards">inline keyboard</a>. */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['media']) || !$properties['media']) {
            return $properties;
        }

        $properties['media'] = (new InputMediaResolver())->resolve($properties['media']);

        return $properties;
    }
}
