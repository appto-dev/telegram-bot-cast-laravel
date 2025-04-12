<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Changes the username of a managed business account. Requires the
 * <em>can_change_username</em> business bot right. Returns <em>True</em> on
 * success.
 */
final class SetBusinessAccountUsername extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * The new value of the username for the business account; 0-32 characters
         * @var string
         */
        public ?string $username,
    ) {
    }
}
