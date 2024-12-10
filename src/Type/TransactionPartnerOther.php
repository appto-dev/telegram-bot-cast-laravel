<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a transaction with an unknown source or recipient.
 */
final class TransactionPartnerOther extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "other"
         * @var string
         */
        public string $type,
    ) {
    }
}
