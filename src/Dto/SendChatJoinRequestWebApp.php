<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to process a received chat join request query by showing a Mini App to the user before
 * deciding the outcome. Call <a
 * href="https://core.telegram.org/bots/api#answerchatjoinrequestquery">answerChatJoinRequestQuery</a> to resolve
 * the join request query based on the user interaction with the Mini App. Returns <em>True</em> on success.
 */
final class SendChatJoinRequestWebApp extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the join request query */
        public string $chat_join_request_query_id,
        /**
         * An HTTPS URL of a Web App to be opened with additional data as specified in <a
         * href="/bots/webapps#initializing-mini-apps">Initializing Web Apps</a>
         */
        public string $web_app_url,
    ) {
    }
}
