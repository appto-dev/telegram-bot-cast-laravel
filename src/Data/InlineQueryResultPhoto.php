<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\InputMessageContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\InputMessageContentResolver;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you
 * can use <em>input_message_content</em> to send a message with the specified content instead of the photo.
 */
final class InlineQueryResultPhoto extends Data implements TelegramBotData, InlineQueryResult
{
    public function __construct(
        /** Type of the result, must be photo */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB */
        public string $photo_url,
        /** URL of the thumbnail for the photo */
        public string $thumbnail_url,
        /** Width of the photo */
        public ?int $photo_width,
        /** Height of the photo */
        public ?int $photo_height,
        /** Title for the result */
        public ?string $title,
        /** Short description of the result */
        public ?string $description,
        /** Caption of the photo to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /** Mode for parsing entities in the photo caption. See formatting options for more details. */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified instead of parse_mode
         * @var array<MessageEntity>
         */
        public ?array $caption_entities,
        /** Pass True, if the caption must be shown above the message media */
        public ?bool $show_caption_above_media,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** Content of the message to be sent instead of the photo */
        public ?InputMessageContent $input_message_content,
    ) {
    }

    public static function prepareForPipeline(array $properties): array
    {
        if (!isset($properties['input_message_content']) || !$properties['input_message_content']) {
            return $properties;
        }

        $properties['input_message_content'] = (new InputMessageContentResolver())
            ->resolve($properties['input_message_content']);

        return $properties;
    }
}
