<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to set the result of an interaction with a <a
 * href="https://core.telegram.org/bots/webapps">Web App</a> and send a
 * corresponding message on behalf of the user to the chat from which the query
 * originated. On success, a <a
 * href="https://core.telegram.org/bots/api#sentwebappmessage">SentWebAppMessage</a>
 * object is returned.
 */
final class AnswerWebAppQuery extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier for the query to be answered */
        public string $web_app_query_id,
        /** A JSON-serialized object describing the message to be sent */
        public InlineQueryResult $result,
    ) {
    }
}
