<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class TonWalletCard extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Address of the wallet */
        public string $address,
        /**
         * @var  string  Balance of the wallet, in the smallest units of the cryptocurrency, as a decimal
         * number
         */
        public string $amount,
        /** @var  TonWalletCardSticker[]  Stickers placed on the card */
        public array $stickers,
        /**
         * @var  string|null  Address of the NFT of one of the stickers, whose colors must be used for the card
         * background; omitted if the default background must be used
         */
        public ?string $background_nft_address,
    ) {
    }
}
