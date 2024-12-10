<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Spatie\LaravelData\Data;

/**
 * Use this method to stop updating a live location message before
 * <em>live_period</em> expires. On success, if the message is not an inline
 * message, the edited <a href="#message">Message</a> is returned, otherwise
 * <em>True</em> is returned.
 */
final class StopMessageLiveLocation extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message to
         * be edited was sent
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Unique identifier for
         * the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         * @var int|string
         */
        public int|string|null $chat_id,
        /**
         * Required if <em>inline_message_id</em> is not specified. Identifier of the
         * message with live location to stop
         * @var int
         */
        public ?int $message_id,
        /**
         * Required if <em>chat_id</em> and <em>message_id</em> are not specified.
         * Identifier of the inline message
         * @var string
         */
        public ?string $inline_message_id,
        /**
         * A JSON-serialized object for a new <a
         * href="/bots/features#inline-keyboards">inline keyboard</a>.
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
