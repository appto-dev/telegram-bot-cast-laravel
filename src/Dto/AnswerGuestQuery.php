<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to reply to a received guest message. On success, a <a
 * href="https://core.telegram.org/bots/api#sentguestmessage">SentGuestMessage</a> object is returned.
 */
final class AnswerGuestQuery extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the query to be answered */
        public string $guest_query_id,
        /** A JSON-serialized object describing the message to be sent */
        public InlineQueryResult $result,
    ) {
    }
}
