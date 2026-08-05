<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Support;

use Appto\TelegramBot\Type\InlineQueryResult;
use Appto\TelegramBot\Type\InlineQueryResultsButton;

/**
 * The following methods and objects allow your bot to work in
 * <a href="/bots/inline">inline mode</a>.Please see our
 * <a href="/bots/inline">Introduction to Inline bots</a> for more details.
 * To enable this option, send the /setinline command to
 * <a href="https://t.me/botfather">@BotFather</a> and provide the placeholder text that the user will
 * see in the input field after typing your bot's name.
 */
interface InlineMode
{
    /**
     * Use this method to send answers to an inline query. On success, <em>True</em> is returned.No more
     * than 50 results per query are allowed.
     *
     * @param  string $inline_query_id Unique identifier for the answered query
     * @param  InlineQueryResult[] $results A JSON-serialized Array of results for the inline query
     * @param  int|null $cache_time The maximum amount of time in seconds that the result of the inline
     * query may be cached on the server. Defaults to 300.
     * @param  bool|null $is_personal Pass <em>True</em> if results may be cached on the server side only
     * for the user that sent the query. By default, results may be returned to any user who sends the same
     * query.
     * @param  string|null $next_offset Pass the offset that a client should send in the next query with
     * the same text to receive more results. Pass an empty string if there are no more results or if you
     * don't support pagination. Offset length can't exceed 64 bytes.
     * @param  InlineQueryResultsButton|null $button A JSON-serialized object describing a button to be
     * shown above inline query results
     *
     * @return true
     */
    public function answerInlineQuery(
        string $inline_query_id,
        array $results,
        ?int $cache_time = null,
        ?bool $is_personal = null,
        ?string $next_offset = null,
        ?InlineQueryResultsButton $button = null,
    ): true;
}
