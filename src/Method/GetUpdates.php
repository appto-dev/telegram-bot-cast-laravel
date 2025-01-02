<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to receive incoming updates using long polling (<a
 * href="https://en.wikipedia.org/wiki/Push_technology#Long_polling">wiki</a>).
 * Returns an Array of <a href="#update">Update</a> objects.
 */
final class GetUpdates extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Identifier of the first update to be returned. Must be greater by one than the
         * highest among the identifiers of previously received updates. By default,
         * updates starting with the earliest unconfirmed update are returned. An update is
         * considered confirmed as soon as <a href="#getupdates">getUpdates</a> is called
         * with an <em>offset</em> higher than its <em>update_id</em>. The negative offset
         * can be specified to retrieve updates starting from <em>-offset</em> update from
         * the end of the updates queue. All previous updates will be forgotten.
         * @var int
         */
        public ?int $offset,
        /**
         * Limits the number of updates to be retrieved. Values between 1-100 are accepted.
         * Defaults to 100.
         * @var int
         */
        public ?int $limit,
        /**
         * Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling.
         * Should be positive, short polling should be used for testing purposes only.
         * @var int
         */
        public ?int $timeout,
        /**
         * A JSON-serialized list of the update types you want your bot to receive. For
         * example, specify <code>["message", "edited_channel_post",
         * "callback_query"]</code> to only receive updates of these types. See <a
         * href="#update">Update</a> for a complete list of available update types. Specify
         * an empty list to receive all update types except <em>chat_member</em>,
         * <em>message_reaction</em>, and <em>message_reaction_count</em> (default). If not
         * specified, the previous setting will be used.<br><br>Please note that this
         * parameter doesn't affect updates created before the call to getUpdates, so
         * unwanted updates may be received for a short period of time.
         * @var string[]
         */
        public ?array $allowed_updates,
    ) {
    }
}
