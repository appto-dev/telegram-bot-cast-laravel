<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to process a received chat join request query. Returns <em>True</em> on success.
 */
final class AnswerChatJoinRequestQuery extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the join request query */
        public string $chat_join_request_query_id,
        /**
         * Result of the query. Must be either "approve" to allow the user to join the chat, "decline" to disallow the
         * user to join the chat, or "queue" to leave the decision to other administrators.
         */
        public string $result,
    ) {
    }
}
