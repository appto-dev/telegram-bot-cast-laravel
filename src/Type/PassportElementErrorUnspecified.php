<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * PassportElementErrorUnspecified
 *
 * Represents an issue in an unspecified place. The error is considered resolved
 * when new data is added.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PassportElementErrorUnspecified extends Data implements TypeInterface
{
    public function __construct(
        /** Error source, must be unspecified */
        public string $source,
        /** Type of element of the user's Telegram Passport which has the issue */
        public string $type,
        /** Base64-encoded element hash */
        public string $element_hash,
        /** Error message */
        public string $message,
    ) {
    }
}
