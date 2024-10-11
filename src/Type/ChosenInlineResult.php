<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="#inlinequeryresult">result</a> of an inline query that was
 * chosen by the user and sent to their chat partner.
 *
 * @version Telegram Bot API 7.10
 */
final class ChosenInlineResult extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The unique identifier for the result that was chosen
         * @var string
         */
        public string $result_id,
        /**
         * The user that chose the result
         * @var User
         */
        public User $from,
        /**
         * Sender location, only for bots that require user location
         * @var Location
         */
        public ?Location $location,
        /**
         * Identifier of the sent inline message. Available only if there is an inline
         * keyboard attached to the message. Will be also received in callback queries and
         * can be used to edit the message.
         * @var string
         */
        public ?string $inline_message_id,
        /**
         * The query that was used to obtain the result
         * @var string
         */
        public string $query,
    ) {
    }
}
