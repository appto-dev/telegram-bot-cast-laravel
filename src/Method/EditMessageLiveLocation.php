<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Spatie\LaravelData\Data;

/**
 * The following methods allow you to change an existing message in the message history instead of
 * sending a new one with a result of an action. This is most useful for messages with
 * <a href="/bots/features#inline-keyboards">inline keyboards</a> using callback queries, but can also
 * help reduce clutter in conversations with regular chat bots.
 * Please note, that it is currently only possible to edit messages without <em>reply_markup</em> or
 * with <a href="/bots/features#inline-keyboards">inline keyboards</a>.
 */
class EditMessageLiveLocation extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  string|null  Unique identifier of the business connection on behalf of which the message to be
         * edited was sent
         */
        public ?string $business_connection_id,
        /**
         * @var  int|string|null  Required if <em>inline_message_id</em> is not specified. Unique identifier
         * for the target chat or username of the target bot, supergroup or channel in the format
         * <code>@username</code>.
         */
        public int|string|null $chat_id,
        /**
         * @var  int|null  Required if <em>inline_message_id</em> is not specified. Identifier of the message
         * to edit.
         */
        public ?int $message_id,
        /**
         * @var  string|null  Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message.
         */
        public ?string $inline_message_id,
        /** @var  float  Latitude of new location */
        public float $latitude,
        /** @var  float  Longitude of new location */
        public float $longitude,
        /**
         * @var  int|null  New period in seconds during which the location can be updated, starting from the
         * message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise,
         * the new value must not exceed the current <em>live_period</em> by more than a day, and the live
         * location expiration date must remain within the next 90 days. If not specified, then
         * <em>live_period</em> remains unchanged.
         */
        public ?int $live_period,
        /** @var  float|null  The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
        /**
         * @var  int|null  Direction in which the user is moving, in degrees. Must be between 1 and 360 if
         * specified.
         */
        public ?int $heading,
        /**
         * @var  int|null  The maximum distance for proximity alerts about approaching another chat member, in
         * meters. Must be between 1 and 100000 if specified.
         */
        public ?int $proximity_alert_radius,
        /**
         * @var  InlineKeyboardMarkup|null  A JSON-serialized object for a new
         * <a href="/bots/features#inline-keyboards">inline keyboard</a>
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
