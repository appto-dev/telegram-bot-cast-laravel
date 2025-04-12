<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Changes the bio of a managed business account. Requires the
 * <em>can_change_bio</em> business bot right. Returns <em>True</em> on success.
 */
final class SetBusinessAccountBio extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * The new value of the bio for the business account; 0-140 characters
         * @var string
         */
        public ?string $bio,
    ) {
    }
}
