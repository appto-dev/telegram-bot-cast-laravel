<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InlineKeyboardMarkup;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to stop updating a live location message before
 * <em>live_period</em> expires. On success, if the message is not an inline
 * message, the edited <a
 * href="https://core.telegram.org/bots/api#message">Message</a> is returned,
 * otherwise <em>True</em> is returned.
 */
final class StopMessageLiveLocation extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message to
         * be edited was sent
         */
        public ?string $business_connection_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Unique identifier for
         * the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string|null $chat_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Identifier of the
         * message with live location to stop
         */
        public ?int $message_id,
        /**
         * Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message
         */
        public ?string $inline_message_id,
        /**
         * A JSON-serialized object for a new <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>.
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
