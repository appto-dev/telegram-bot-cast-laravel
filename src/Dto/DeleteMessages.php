<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete multiple messages simultaneously. If some of the
 * specified messages can't be found, they are skipped. Returns <em>True</em> on
 * success.
 */
final class DeleteMessages extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages to delete. See <a
         * href="https://core.telegram.org/bots/api#deletemessage">deleteMessage</a> for
         * limitations on which messages can be deleted
         */
        public array $message_ids,
    ) {
    }
}
