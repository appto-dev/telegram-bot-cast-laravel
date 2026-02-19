<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Upgrades a given regular gift to a unique gift. Requires the <em>can_transfer_and_upgrade_gifts</em> business bot right.
 * Additionally requires the <em>can_transfer_stars</em> business bot right if the upgrade is paid. Returns <em>True</em>
 * on success.
 */
final class UpgradeGift extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Unique identifier of the regular gift that should be upgraded to a unique one */
        public string $owned_gift_id,
        /** Pass <em>True</em> to keep the original gift text, sender and receiver in the upgraded gift */
        public ?bool $keep_original_details,
        /**
         * The amount of Telegram Stars that will be paid for the upgrade from the business account balance. If
         * <code>gift.prepaid_upgrade_star_count > 0</code>, then pass 0, otherwise, the <em>can_transfer_stars</em> business bot
         * right is required and <code>gift.upgrade_star_count</code> must be passed.
         */
        public ?int $star_count,
    ) {
    }
}
