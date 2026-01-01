<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Returns the gifts owned and hosted by a user. Returns <a
 * href="#ownedgifts">OwnedGifts</a> on success.
 */
final class GetUserGifts extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the user
         * @var int
         */
        public int $user_id,
        /**
         * Pass <em>True</em> to exclude gifts that can be purchased an unlimited number of
         * times
         * @var bool
         */
        public ?bool $exclude_unlimited,
        /**
         * Pass <em>True</em> to exclude gifts that can be purchased a limited number of
         * times and can be upgraded to unique
         * @var bool
         */
        public ?bool $exclude_limited_upgradable,
        /**
         * Pass <em>True</em> to exclude gifts that can be purchased a limited number of
         * times and can't be upgraded to unique
         * @var bool
         */
        public ?bool $exclude_limited_non_upgradable,
        /**
         * Pass <em>True</em> to exclude gifts that were assigned from the TON blockchain
         * and can't be resold or transferred in Telegram
         * @var bool
         */
        public ?bool $exclude_from_blockchain,
        /**
         * Pass <em>True</em> to exclude unique gifts
         * @var bool
         */
        public ?bool $exclude_unique,
        /**
         * Pass <em>True</em> to sort results by gift price instead of send date. Sorting
         * is applied before pagination.
         * @var bool
         */
        public ?bool $sort_by_price,
        /**
         * Offset of the first entry to return as received from the previous request; use
         * an empty string to get the first chunk of results
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
