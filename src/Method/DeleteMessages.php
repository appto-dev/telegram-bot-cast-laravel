<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to delete multiple messages simultaneously. If some of the
 * specified messages can't be found, they are skipped. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot API 7.10
 */
final class DeleteMessages extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * A JSON-serialized list of 1-100 identifiers of messages to delete. See
         * deleteMessage for limitations on which messages can be deleted
         * @var int[]
         */
        public array $message_ids,
    ) {
    }
}
