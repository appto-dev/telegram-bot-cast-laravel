<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\ForceReply;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardMarkup;
use Appto\TelegramBot\Type\ReplyKeyboardRemove;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send information about a venue. On success, the sent <a
 * href="#message">Message</a> is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class SendVenue extends Data implements TelegramMethodContract
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
         * Latitude of the venue
         * @var float
         */
        public float $latitude,
        /**
         * Longitude of the venue
         * @var float
         */
        public float $longitude,
        /**
         * Name of the venue
         * @var string
         */
        public string $title,
        /**
         * Address of the venue
         * @var string
         */
        public string $address,
        /**
         * Foursquare identifier of the venue
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
