<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InlineQueryResult;
use Spatie\LaravelData\Data;

/**
 * Use this method to set the result of an interaction with a <a
 * href="/bots/webapps">Web App</a> and send a corresponding message on behalf of
 * the user to the chat from which the query originated. On success, a <a
 * href="#sentwebappmessage">SentWebAppMessage</a> object is returned.
 */
final class AnswerWebAppQuery extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the query to be answered
         * @var string
         */
        public string $web_app_query_id,
        /**
         * A JSON-serialized object describing the message to be sent
         * @var InlineQueryResult
         */
        public InlineQueryResult $result,
    ) {
    }
}
