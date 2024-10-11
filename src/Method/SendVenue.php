<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
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
final class SendVenue extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier for the target message thread (topic) of the forum; for forum
         * supergroups only
         * @var int
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
         * @var string
         */
        public ?string $foursquare_id,
        /**
         * Foursquare type of the venue, if known. (For example,
         * "arts_entertainment/default", "arts_entertainment/aquarium" or "food/icecream".)
         * @var string
         */
        public ?string $foursquare_type,
        /**
         * Google Places identifier of the venue
         * @var string
         */
        public ?string $google_place_id,
        /**
         * Google Places type of the venue. (See <a
         * href="https://developers.google.com/places/web-service/supported_types">supported
         * types</a>.)
         * @var string
         */
        public ?string $google_place_type,
        /**
         * Sends the message <a
         * href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>.
         * Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent message from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Unique identifier of the message effect to be added to the message; for private
         * chats only
         * @var string
         */
        public ?string $message_effect_id,
        /**
         * Description of the message to reply to
         * @var ReplyParameters
         */
        public ?ReplyParameters $reply_parameters,
        /**
         * Additional interface options. A JSON-serialized object for an <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>, <a
         * href="/bots/features#keyboards">custom reply keyboard</a>, instructions to
         * remove a reply keyboard or to force a reply from the user
         * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}
