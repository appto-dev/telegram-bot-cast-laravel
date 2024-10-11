<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The reaction is paid.
 *
 * @version Telegram Bot API 7.10
 */
final class ReactionTypePaid extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the reaction, always "paid"
         * @var string
         */
        public string $type,
    ) {
    }
}
