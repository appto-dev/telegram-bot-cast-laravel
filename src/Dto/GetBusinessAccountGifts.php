<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Returns the gifts received and owned by a managed business account. Requires the <em>can_view_gifts_and_stars</em>
 * business bot right. Returns <a href="https://core.telegram.org/bots/api#ownedgifts">OwnedGifts</a> on success.
 */
final class GetBusinessAccountGifts extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Pass <em>True</em> to exclude gifts that aren't saved to the account's profile page */
        public ?bool $exclude_unsaved,
        /** Pass <em>True</em> to exclude gifts that are saved to the account's profile page */
        public ?bool $exclude_saved,
        /** Pass <em>True</em> to exclude gifts that can be purchased an unlimited number of times */
        public ?bool $exclude_unlimited,
        /** Pass <em>True</em> to exclude gifts that can be purchased a limited number of times and can be upgraded to unique */
        public ?bool $exclude_limited_upgradable,
        /** Pass <em>True</em> to exclude gifts that can be purchased a limited number of times and can't be upgraded to unique */
        public ?bool $exclude_limited_non_upgradable,
        /** Pass <em>True</em> to exclude unique gifts */
        public ?bool $exclude_unique,
        /**
         * Pass <em>True</em> to exclude gifts that were assigned from the TON blockchain and can't be resold or transferred in
         * Telegram
         */
        public ?bool $exclude_from_blockchain,
        /** Pass <em>True</em> to sort results by gift price instead of send date. Sorting is applied before pagination. */
        public ?bool $sort_by_price,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of
         * results
         */
        public ?string $offset,
        /** The maximum number of gifts to be returned; 1-100. Defaults to 100 */
        public ?int $limit,
    ) {
    }
}
