<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Returns the gifts owned by a chat. Returns <a
 * href="https://core.telegram.org/bots/api#ownedgifts">OwnedGifts</a> on success.
 */
final class GetChatGifts extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /**
         * Pass <em>True</em> to exclude gifts that aren't saved to the chat's profile
         * page. Always <em>True</em>, unless the bot has the <em>can_post_messages</em>
         * administrator right in the channel.
         */
        public ?bool $exclude_unsaved,
        /**
         * Pass <em>True</em> to exclude gifts that are saved to the chat's profile page.
         * Always <em>False</em>, unless the bot has the <em>can_post_messages</em>
         * administrator right in the channel.
         */
        public ?bool $exclude_saved,
        /**
         * Pass <em>True</em> to exclude gifts that can be purchased an unlimited number of
         * times
         */
        public ?bool $exclude_unlimited,
        /**
         * Pass <em>True</em> to exclude gifts that can be purchased a limited number of
         * times and can be upgraded to unique
         */
        public ?bool $exclude_limited_upgradable,
        /**
         * Pass <em>True</em> to exclude gifts that can be purchased a limited number of
         * times and can't be upgraded to unique
         */
        public ?bool $exclude_limited_non_upgradable,
        /**
         * Pass <em>True</em> to exclude gifts that were assigned from the TON blockchain
         * and can't be resold or transferred in Telegram
         */
        public ?bool $exclude_from_blockchain,
        /** Pass <em>True</em> to exclude unique gifts */
        public ?bool $exclude_unique,
        /**
         * Pass <em>True</em> to sort results by gift price instead of send date. Sorting
         * is applied before pagination.
         */
        public ?bool $sort_by_price,
        /**
         * Offset of the first entry to return as received from the previous request; use
         * an empty string to get the first chunk of results
         */
        public ?string $offset,
        /** The maximum number of gifts to be returned; 1-100. Defaults to 100 */
        public ?int $limit,
    ) {
    }
}
