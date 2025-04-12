<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Changes the first and last name of a managed business account. Requires the
 * <em>can_change_name</em> business bot right. Returns <em>True</em> on success.
 */
final class SetBusinessAccountName extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * The new value of the first name for the business account; 1-64 characters
         * @var string
         */
        public string $first_name,
        /**
         * The new value of the last name for the business account; 0-64 characters
         * @var string
         */
        public ?string $last_name,
    ) {
    }
}
