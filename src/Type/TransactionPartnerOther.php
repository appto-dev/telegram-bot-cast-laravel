<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes a transaction with an unknown source or recipient.
 *
 * @version Telegram Bot API 7.10
 */
final class TransactionPartnerOther extends Data implements TelegramTypeContract
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
