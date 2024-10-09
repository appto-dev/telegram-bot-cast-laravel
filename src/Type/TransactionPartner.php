<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object describes the source of a transaction, or its recipient for outgoing
 * transactions. Currently, it can be one of
 *  - <a href="#transactionpartneruser">TransactionPartnerUser</a>
 *  - <a href="#transactionpartnerfragment">TransactionPartnerFragment</a>
 *  - <a href="#transactionpartnertelegramads">TransactionPartnerTelegramAds</a>
 *  - <a href="#transactionpartnerother">TransactionPartnerOther</a>
 *
 * @version Telegram Bot API 7.10
 */
final class TransactionPartner extends Data implements TelegramTypeContract
{
}
