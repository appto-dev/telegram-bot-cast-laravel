<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents an issue in an unspecified place. The error is considered resolved
 * when new data is added.
 *
 * @version Telegram Bot API 7.10
 */
final class PassportElementErrorUnspecified extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Error source, must be unspecified
         * @var string
         */
        public string $source,
        /**
         * Type of element of the user's Telegram Passport which has the issue
         * @var string
         */
        public string $type,
        /**
         * Base64-encoded element hash
         * @var string
         */
        public string $element_hash,
        /**
         * Error message
         * @var string
         */
        public string $message,
    ) {
    }
}
