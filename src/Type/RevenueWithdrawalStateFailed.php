<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The withdrawal failed and the transaction was refunded.
 *
 * @version Telegram Bot API 7.10
 */
final class RevenueWithdrawalStateFailed extends Data implements TelegramTypeContract
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
