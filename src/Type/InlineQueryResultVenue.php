<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\InputMessageContentCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class InlineQueryResultVenue extends Data implements TelegramType, InlineQueryResult
{
    public function __construct(
        /** @var  string  Type of the result, must be venue */
        public string $type,
        /** @var  string  Unique identifier for this result, 1-64 Bytes */
        public string $id,
        /** @var  float  Latitude of the venue location in degrees */
        public float $latitude,
        /** @var  float  Longitude of the venue location in degrees */
        public float $longitude,
        /** @var  string  Title of the venue */
        public string $title,
        /** @var  string  Address of the venue */
        public string $address,
        /** @var  string|null  Foursquare identifier of the venue if known */
        public ?string $foursquare_id,
        /**
         * @var  string|null  Foursquare type of the venue, if known. (For example,
         * "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
         */
        public ?string $foursquare_type,
        /** @var  string|null  Google Places identifier of the venue */
        public ?string $google_place_id,
        /** @var  string|null  Google Places type of the venue. (See supported types.) */
        public ?string $google_place_type,
        /** @var  InlineKeyboardMarkup|null  Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** @var  InputMessageContent|null  Content of the message to be sent instead of the venue */
        #[WithCast(InputMessageContentCast::class)]
        public ?InputMessageContent $input_message_content,
        /** @var  string|null  Url of the thumbnail for the result */
        public ?string $thumbnail_url,
        /** @var  int|null  Thumbnail width */
        public ?int $thumbnail_width,
        /** @var  int|null  Thumbnail height */
        public ?int $thumbnail_height,
    ) {
    }
}
