<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\AcceptedGiftTypes;
use Spatie\LaravelData\Data;

/**
 * Changes the privacy settings pertaining to incoming gifts in a managed business
 * account. Requires the <em>can_change_gift_settings</em> business bot right.
 * Returns <em>True</em> on success.
 */
final class SetBusinessAccountGiftSettings extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Pass <em>True</em>, if a button for sending a gift to the user or by the
         * business account must always be shown in the input field
         * @var bool
         */
        public bool $show_gift_button,
        /**
         * Types of gifts accepted by the business account
         * @var AcceptedGiftTypes
         */
        public AcceptedGiftTypes $accepted_gift_types,
    ) {
    }
}
