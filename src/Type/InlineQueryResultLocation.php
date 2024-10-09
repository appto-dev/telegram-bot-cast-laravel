<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a location on a map. By default, the location will be sent by the
 * user. Alternatively, you can use <em>input_message_content</em> to send a
 * message with the specified content instead of the location.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultLocation extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the result, must be location
         * @var string
         */
        public string $type,
        /**
         * Unique identifier for this result, 1-64 Bytes
         * @var string
         */
        public string $id,
        /**
         * Location latitude in degrees
         * @var float
         */
        public float $latitude,
        /**
         * Location longitude in degrees
         * @var float
         */
        public float $longitude,
        /**
         * Location title
         * @var string
         */
        public string $title,
        /**
         * The radius of uncertainty for the location, measured in meters; 0-1500
         * @var float
         */
        public ?float $horizontal_accuracy,
        /**
         * Period in seconds during which the location can be updated, should be between 60
         * and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
         * @var int
         */
        public ?int $live_period,
        /**
         * For live locations, a direction in which the user is moving, in degrees. Must be
         * between 1 and 360 if specified.
         * @var int
         */
        public ?int $heading,
        /**
         * For live locations, a maximum distance for proximity alerts about approaching
         * another chat member, in meters. Must be between 1 and 100000 if specified.
         * @var int
         */
        public ?int $proximity_alert_radius,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the location
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Url of the thumbnail for the result
         * @var string
         */
        public ?string $thumbnail_url,
        /**
         * Thumbnail width
         * @var int
         */
        public ?int $thumbnail_width,
        /**
         * Thumbnail height
         * @var int
         */
        public ?int $thumbnail_height,
    ) {
    }
}
