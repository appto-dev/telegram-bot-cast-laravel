<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Returns the gifts received and owned by a managed business account. Requires the
 * <em>can_view_gifts_and_stars</em> business bot right. Returns <a
 * href="#ownedgifts">OwnedGifts</a> on success.
 */
final class GetBusinessAccountGifts extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Pass True to exclude gifts that aren't saved to the account's profile page
         * @var bool
         */
        public ?bool $exclude_unsaved,
        /**
         * Pass True to exclude gifts that are saved to the account's profile page
         * @var bool
         */
        public ?bool $exclude_saved,
        /**
         * Pass True to exclude gifts that can be purchased an unlimited number of times
         * @var bool
         */
        public ?bool $exclude_unlimited,
        /**
         * Pass True to exclude gifts that can be purchased a limited number of times
         * @var bool
         */
        public ?bool $exclude_limited,
        /**
         * Pass True to exclude unique gifts
         * @var bool
         */
        public ?bool $exclude_unique,
        /**
         * Pass True to sort results by gift price instead of send date. Sorting is applied
         * before pagination.
         * @var bool
         */
        public ?bool $sort_by_price,
        /**
         * Offset of the first entry to return as received from the previous request; use
         * empty string to get the first chunk of results
         * @var string
         */
        public ?string $offset,
        /**
         * The maximum number of gifts to be returned; 1-100. Defaults to 100
         * @var int
         */
        public ?int $limit,
    ) {
    }
}
