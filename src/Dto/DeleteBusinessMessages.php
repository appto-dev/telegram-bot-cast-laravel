<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Delete messages on behalf of a business account. Requires the <em>can_delete_sent_messages</em> business bot
 * right to delete messages sent by the bot itself, or the <em>can_delete_all_messages</em> business bot right to
 * delete any message. Returns <em>True</em> on success.
 */
final class DeleteBusinessMessages extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection on behalf of which to delete the messages */
        public string $business_connection_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages to delete. All messages must be from the same chat.
         * See <a href="#deletemessage">deleteMessage</a> for limitations on which messages can be deleted
         * @var array<int>
         */
        public array $message_ids,
    ) {
    }
}
