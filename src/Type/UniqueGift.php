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
         * Information about the chat that published the gift
         * @var Chat
         */
        public ?Chat $publisher_chat,
    ) {
    }
}
