<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Returns the amount of Telegram Stars owned by a managed business account.
 * Requires the <em>can_view_gifts_and_stars</em> business bot right. Returns <a
 * href="#staramount">StarAmount</a> on success.
 */
final class GetBusinessAccountStarBalance extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
    ) {
    }
}
