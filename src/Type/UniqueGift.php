<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class UniqueGift extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Identifier of the regular gift from which the gift was upgraded */
        public string $gift_id,
        /** @var  string  Human-readable name of the regular gift from which this unique gift was upgraded */
        public string $base_name,
        /**
         * @var  string  Unique name of the gift. This name can be used in https://t.me/nft/... links and story
         * areas.
         */
        public string $name,
        /** @var  int  Unique number of the upgraded gift among gifts upgraded from the same regular gift */
        public int $number,
        /** @var  UniqueGiftModel  Model of the gift */
        public UniqueGiftModel $model,
        /** @var  UniqueGiftSymbol  Symbol of the gift */
        public UniqueGiftSymbol $symbol,
        /** @var  UniqueGiftBackdrop  Backdrop of the gift */
        public UniqueGiftBackdrop $backdrop,
        /**
         * @var  true|null  True, if the original regular gift was exclusively purchaseable by Telegram Premium
         * subscribers
         */
        public ?true $is_premium,
        /** @var  true|null  True, if the gift was used to craft another gift and isn't available anymore */
        public ?true $is_burned,
        /**
         * @var  true|null  True, if the gift is assigned from the TON blockchain and can't be resold or
         * transferred in Telegram
         */
        public ?true $is_from_blockchain,
        /**
         * @var  UniqueGiftColors|null  The color scheme that can be used by the gift's owner for the chat's
         * name, replies to messages and link previews; for business account gifts and gifts that are currently
         * on sale only
         */
        public ?UniqueGiftColors $colors,
        /** @var  Chat|null  Information about the chat that published the gift */
        public ?Chat $publisher_chat,
    ) {
    }
}
