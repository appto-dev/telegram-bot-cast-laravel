<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Delete messages on behalf of a business account. Requires the
 * <em>can_delete_outgoing_messages</em> business bot right to delete messages sent
 * by the bot itself, or the <em>can_delete_all_messages</em> business bot right to
 * delete any message. Returns <em>True</em> on success.
 */
final class DeleteBusinessMessages extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which to delete the
         * messages
         * @var string
         */
        public string $business_connection_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages to delete. All messages
         * must be from the same chat. See <a href="#deletemessage">deleteMessage</a> for
         * limitations on which messages can be deleted
         * @var int[]
         */
        public array $message_ids,
    ) {
    }
}
