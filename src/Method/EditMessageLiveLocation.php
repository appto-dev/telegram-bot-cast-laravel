<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit live location messages. A location can be edited until
 * its <em>live_period</em> expires or editing is explicitly disabled by a call to
 * <a href="#stopmessagelivelocation">stopMessageLiveLocation</a>. On success, if
 * the edited message is not an inline message, the edited <a
 * href="#message">Message</a> is returned, otherwise <em>True</em> is returned.
 */
final class EditMessageLiveLocation extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message to
         * be edited was sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Unique identifier for
         * the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         * @var int|string
         */
        public int|string|null $chat_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Identifier of the
         * message to edit
         * @var int
         */
        public ?int $message_id,
        /**
         * Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message
         * @var string
         */
        public ?string $inline_message_id,
        /**
         * Latitude of new location
         * @var float
         */
        public float $latitude,
        /**
         * Longitude of new location
         * @var float
         */
        public float $longitude,
        /**
         * New period in seconds during which the location can be updated, starting from
         * the message send date. If 0x7FFFFFFF is specified, then the location can be
         * updated forever. Otherwise, the new value must not exceed the current
         * <em>live_period</em> by more than a day, and the live location expiration date
         * must remain within the next 90 days. If not specified, then <em>live_period</em>
         * remains unchanged
         * @var int
         */
        public ?int $live_period,
        /**
         * The radius of uncertainty for the location, measured in meters; 0-1500
         * @var float
         */
        public ?float $horizontal_accuracy,
        /**
         * Direction in which the user is moving, in degrees. Must be between 1 and 360 if
         * specified.
         * @var int
         */
        public ?int $heading,
        /**
         * The maximum distance for proximity alerts about approaching another chat member,
         * in meters. Must be between 1 and 100000 if specified.
         * @var int
         */
        public ?int $proximity_alert_radius,
        /**
         * A JSON-serialized object for a new <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>.
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
