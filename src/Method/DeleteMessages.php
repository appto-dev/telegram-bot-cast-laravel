<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to delete multiple messages simultaneously. If some of the
 * specified messages can't be found, they are skipped. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot API 7.11
 */
final class DeleteMessages extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages to delete. See <a
         * href="#deletemessage">deleteMessage</a> for limitations on which messages can be
         * deleted
         * @var int[]
         */
        public array $message_ids,
    ) {
    }
}
