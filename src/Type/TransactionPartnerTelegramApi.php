<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a transaction with payment for <a href="#paid-broadcasts">paid
 * broadcasting</a>.
 */
final class TransactionPartnerTelegramApi extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "telegram_api"
         * @var string
         */
        public string $type,
        /**
         * The number of successful requests that exceeded regular limits and were
         * therefore billed
         * @var int
         */
        public int $request_count,
    ) {
    }
}
