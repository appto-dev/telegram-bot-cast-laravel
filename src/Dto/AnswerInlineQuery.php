<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\InlineQueryResultsButton;
use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to send answers to an inline query. On success, <em>True</em> is returned.No more than 50
 * results per query are allowed.
 */
final class AnswerInlineQuery extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the answered query */
        public string $inline_query_id,
        /** A JSON-serialized array of results for the inline query */
        public InlineQueryResult $results,
        /**
         * The maximum amount of time in seconds that the result of the inline query may be cached on the server.
         * Defaults to 300.
         */
        public ?int $cache_time,
        /**
         * Pass <em>True</em> if results may be cached on the server side only for the user that sent the query. By
         * default, results may be returned to any user who sends the same query.
         */
        public ?bool $is_personal,
        /**
         * Pass the offset that a client should send in the next query with the same text to receive more results. Pass
         * an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64
         * bytes.
         */
        public ?string $next_offset,
        /** A JSON-serialized object describing a button to be shown above inline query results */
        public ?InlineQueryResultsButton $button,
    ) {
    }
}
