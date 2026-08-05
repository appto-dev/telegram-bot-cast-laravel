<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Type\InlineQueryResult;
use Appto\TelegramBot\Type\InlineQueryResultsButton;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
class AnswerInlineQuery extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier for the answered query */
        public string $inline_query_id,
        /** @var  InlineQueryResult[]  A JSON-serialized Array of results for the inline query */
        public array $results,
        /**
         * @var  int|null  The maximum amount of time in seconds that the result of the inline query may be
         * cached on the server. Defaults to 300.
         */
        public ?int $cache_time,
        /**
         * @var  bool|null  Pass <em>True</em> if results may be cached on the server side only for the user
         * that sent the query. By default, results may be returned to any user who sends the same query.
         */
        public ?bool $is_personal,
        /**
         * @var  string|null  Pass the offset that a client should send in the next query with the same text to
         * receive more results. Pass an empty string if there are no more results or if you don't support
         * pagination. Offset length can't exceed 64 bytes.
         */
        public ?string $next_offset,
        /**
         * @var  InlineQueryResultsButton|null  A JSON-serialized object describing a button to be shown above
         * inline query results
         */
        public ?InlineQueryResultsButton $button,
    ) {
    }
}
