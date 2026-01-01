<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes a unique gift that was upgraded from a regular gift.
 */
final class UniqueGift extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Identifier of the regular gift from which the gift was upgraded
         * @var string
         */
        public string $gift_id,
        /**
         * Human-readable name of the regular gift from which this unique gift was upgraded
         * @var string
         */
        public string $base_name,
        /**
         * Unique name of the gift. This name can be used in https://t.me/nft/... links and
         * story areas
         * @var string
         */
        public string $name,
        /**
         * Unique number of the upgraded gift among gifts upgraded from the same regular
         * gift
         * @var int
         */
        public int $number,
        /**
         * Model of the gift
         * @var UniqueGiftModel
         */
        public UniqueGiftModel $model,
        /**
         * Symbol of the gift
         * @var UniqueGiftSymbol
         */
        public UniqueGiftSymbol $symbol,
        /**
         * Backdrop of the gift
         * @var UniqueGiftBackdrop
         */
        public UniqueGiftBackdrop $backdrop,
        /**
         * True, if the original regular gift was exclusively purchaseable by Telegram
         * Premium subscribers
         * @var true
         */
        public ?true $is_premium,
        /**
         * True, if the gift is assigned from the TON blockchain and can't be resold or
         * transferred in Telegram
         * @var true
         */
        public ?true $is_from_blockchain,
        /**
         * The color scheme that can be used by the gift's owner for the chat's name,
         * replies to messages and link previews; for business account gifts and gifts that
         * are currently on sale only
         * @var UniqueGiftColors
         */
        public ?UniqueGiftColors $colors,
        /**
         * Information about the chat that published the gift
         * @var Chat
         */
        public ?Chat $publisher_chat,
    ) {
    }
}
