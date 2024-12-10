<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 */
final class PreparedInlineMessage extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier of the prepared message
         * @var string
         */
        public string $id,
        /**
         * Expiration date of the prepared message, in Unix time. Expired prepared messages
         * can no longer be used
         * @var int
         */
        public int $expiration_date,
    ) {
    }
}
