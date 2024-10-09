<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a venue. By default, the venue will be sent by the user.
 * Alternatively, you can use <em>input_message_content</em> to send a message with
 * the specified content instead of the venue.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultVenue extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the result, must be venue
         * @var string
         */
        public string $type,
        /**
         * Unique identifier for this result, 1-64 Bytes
         * @var string
         */
        public string $id,
        /**
         * Latitude of the venue location in degrees
         * @var float
         */
        public float $latitude,
        /**
         * Longitude of the venue location in degrees
         * @var float
         */
        public float $longitude,
        /**
         * Title of the venue
         * @var string
         */
        public string $title,
        /**
         * Address of the venue
         * @var string
         */
        public string $address,
        /**
         * Foursquare identifier of the venue if known
         * @var string|null
         */
        public ?string $foursquare_id,
        /**
         * Foursquare type of the venue, if known. (For example,
         * "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
         * @var string|null
         */
        public ?string $foursquare_type,
        /**
         * Google Places identifier of the venue
         * @var string|null
         */
        public ?string $google_place_id,
        /**
         * Google Places type of the venue. (See supported types.)
         * @var string|null
         */
        public ?string $google_place_type,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup|null
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the venue
         * @var InputMessageContent|null
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Url of the thumbnail for the result
         * @var string|null
         */
        public ?string $thumbnail_url,
        /**
         * Thumbnail width
         * @var int|null
         */
        public ?int $thumbnail_width,
        /**
         * Thumbnail height
         * @var int|null
         */
        public ?int $thumbnail_height,
    ) {
    }
}
