<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ShippingOption
 *
 * This object represents one shipping option.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ShippingOption extends Data implements TypeInterface
{
    public function __construct(
        /** Shipping option identifier */
        public string $id,
        /** Option title */
        public string $title,
        /**
         * List of price portions
         * @var array<LabeledPrice>
         */
        public array $prices,
    ) {
    }
}
