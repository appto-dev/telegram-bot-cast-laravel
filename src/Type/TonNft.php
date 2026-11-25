<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class TonNft extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Address of the NFT */
        public string $address,
        /** @var  string|null  Address of the collection to which the NFT belongs; omitted if unknown */
        public ?string $collection_address,
        /** @var  string  Index of the NFT among all NFTs from the collection as a decimal number */
        public string $index,
        /** @var  string  Name of the NFT */
        public string $name,
        /** @var  string  Description of the NFT */
        public string $description,
        /** @var  TonNftAttribute[]|null  Attributes of the NFT */
        public ?array $attributes,
        /** @var  UniqueGift|null  The unique gift corresponding to the NFT */
        public ?UniqueGift $gift,
    ) {
    }
}
