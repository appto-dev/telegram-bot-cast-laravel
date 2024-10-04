<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\InlineQueryResult;
use ApptoTeam\TelegramBotCastLaravel\Type\SentWebAppMessage;
use Spatie\LaravelData\Data;

/**
 * AnswerWebAppQuery
 *
 * Use this method to set the result of an interaction with a Web App and send a
 * corresponding message on behalf of the user to the chat from which the query
 * originated. On success, a SentWebAppMessage object is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class AnswerWebAppQuery extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = SentWebAppMessage::class;

    public function __construct(
        /** Unique identifier for the query to be answered */
        public string $web_app_query_id,
        /** A JSON-serialized object describing the message to be sent */
        public InlineQueryResult $result,
    ) {
    }
}
