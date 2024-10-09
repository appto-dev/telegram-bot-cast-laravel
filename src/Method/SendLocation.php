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
 * Use this method to send point on the map. On success, the sent <a
 * href="#message">Message</a> is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class SendLocation extends Data implements TelegramMethodContract
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
         * format @channelusername)
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
         * Latitude of the location
         * @var float
         */
        public float $latitude,
        /**
         * Longitude of the location
         * @var float
         */
        public float $longitude,
        /**
         * The radius of uncertainty for the location, measured in meters; 0-1500
         * @var float
         */
        public ?float $horizontal_accuracy,
        /**
         * Period in seconds during which the location will be updated (see Live Locations,
         * should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be
         * edited indefinitely.
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
         * Sends the message silently. Users will receive a notification with no sound.
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
         * Additional interface options. A JSON-serialized object for an inline keyboard,
         * custom reply keyboard, instructions to remove a reply keyboard or to force a
         * reply from the user
         * @var InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply
         */
        public InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply|null $reply_markup,
    ) {
    }
}
