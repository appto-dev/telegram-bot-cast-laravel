<?php

namespace Appto\TelegramBot\Interfaces;

/**
 * This object describes the source of a transaction, or its recipient for outgoing
 * transactions. Currently, it can be one of
 *  - <a
 * href="https://core.telegram.org/bots/api#transactionpartneruser">TransactionPartnerUser</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#transactionpartnerchat">TransactionPartnerChat</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#transactionpartneraffiliateprogram">TransactionPartnerAffiliateProgram</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#transactionpartnerfragment">TransactionPartnerFragment</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#transactionpartnertelegramads">TransactionPartnerTelegramAds</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#transactionpartnertelegramapi">TransactionPartnerTelegramApi</a>
 *  - <a
 * href="https://core.telegram.org/bots/api#transactionpartnerother">TransactionPartnerOther</a>
 */
interface TransactionPartner
{
}
