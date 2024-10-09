<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The withdrawal is in progress.
 *
 * @version Telegram Bot API 7.10
 */
final class RevenueWithdrawalStatePending extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the state, always "pending"
         * @var string
         */
        public string $type,
    ) {
    }
}
