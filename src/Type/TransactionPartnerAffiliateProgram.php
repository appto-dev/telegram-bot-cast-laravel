<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes the affiliate program that issued the affiliate commission received
 * via this transaction.
 */
final class TransactionPartnerAffiliateProgram extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the transaction partner, always "affiliate_program"
         * @var string
         */
        public string $type,
        /**
         * Information about the bot that sponsored the affiliate program
         * @var User
         */
        public ?User $sponsor_user,
        /**
         * The number of Telegram Stars received by the bot for each 1000 Telegram Stars
         * received by the affiliate program sponsor from referred users
         * @var int
         */
        public int $commission_per_mille,
    ) {
    }
}
