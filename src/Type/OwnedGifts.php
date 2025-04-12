<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Contains the list of gifts received and owned by a user or a chat.
 */
final class OwnedGifts extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The total number of gifts owned by the user or the chat
         * @var int
         */
        public int $total_count,
        /**
         * The list of gifts
         * @var OwnedGift[]
         */
        public array $gifts,
        /**
         * Offset for the next request. If empty, then there are no more results
         * @var string
         */
        public ?string $next_offset,
    ) {
    }
}
