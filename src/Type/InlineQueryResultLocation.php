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
class InlineQueryResultLocation extends Data implements TelegramType, InlineQueryResult
{
    public function __construct(
        /** @var  string  Type of the result, must be location */
        public string $type,
        /** @var  string  Unique identifier for this result, 1-64 Bytes */
        public string $id,
        /** @var  float  Location latitude in degrees */
        public float $latitude,
        /** @var  float  Location longitude in degrees */
        public float $longitude,
        /** @var  string  Location title */
        public string $title,
        /** @var  float|null  The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
        /**
         * @var  int|null  Period in seconds during which the location can be updated, must be between 60 and
         * 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely
         */
        public ?int $live_period,
        /**
         * @var  int|null  For live locations, a direction in which the user is moving, in degrees. Must be
         * between 1 and 360 if specified.
         */
        public ?int $heading,
        /**
         * @var  int|null  For live locations, a maximum distance for proximity alerts about approaching
         * another chat member, in meters. Must be between 1 and 100000 if specified.
         */
        public ?int $proximity_alert_radius,
        /** @var  InlineKeyboardMarkup|null  Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** @var  InputMessageContent|null  Content of the message to be sent instead of the location */
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
