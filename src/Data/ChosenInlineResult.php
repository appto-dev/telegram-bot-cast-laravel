<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="https://core.telegram.org/bots/api#inlinequeryresult">result</a> of an inline query that was
 * chosen by the user and sent to their chat partner.
 */
final class ChosenInlineResult extends Data implements TelegramBotData
{
    public function __construct(
        /** The unique identifier for the result that was chosen */
        public string $result_id,
        /** The user that chose the result */
        public User $from,
        /** Sender location, only for bots that require user location */
        public ?Location $location,
        /**
         * Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be
         * also received in callback queries and can be used to edit the message.
         */
        public ?string $inline_message_id,
        /** The query that was used to obtain the result */
        public string $query,
    ) {
    }
}
