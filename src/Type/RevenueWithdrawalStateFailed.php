<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The withdrawal failed and the transaction was refunded.
 */
final class RevenueWithdrawalStateFailed extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the state, always "failed"
         * @var string
         */
        public string $type,
    ) {
    }
}
