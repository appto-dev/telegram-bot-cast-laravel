<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\InputMessageContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Appto\TelegramBot\Support\Resolvers\InputMessageContentResolver;
use Spatie\LaravelData\Data;

/**
 * Represents a link to an article or web page.
 */
final class InlineQueryResultArticle extends Data implements TelegramBotData, InlineQueryResult
{
    public function __construct(
        /** Type of the result, must be article */
        public string $type,
        /** Unique identifier for this result, 1-64 Bytes */
        public string $id,
        /** Title of the result */
        public string $title,
        /** Content of the message to be sent */
        public InputMessageContent $input_message_content,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** URL of the result */
        public ?string $url,
        /** Short description of the result */
        public ?string $description,
        /** Url of the thumbnail for the result */
        public ?string $thumbnail_url,
        /** Thumbnail width */
        public ?int $thumbnail_width,
        /** Thumbnail height */
        public ?int $thumbnail_height,
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
