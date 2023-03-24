<?php
/**
 * Invoice Ninja (https://invoiceninja.com).
 *
 * @link https://github.com/invoiceninja/invoiceninja source repository
 *
 * @copyright Copyright (c) 2023. Invoice Ninja LLC (https://invoiceninja.com)
 *
 * @license https://www.elastic.co/licensing/elastic-license
 */

namespace App\Events\Invoice;

use App\Models\Company;
use App\Models\InvoiceInvitation;
use Illuminate\Queue\SerializesModels;

/**
 * Class InvoiceReminderWasEmailed.
 */
class InvoiceReminderWasEmailed
{
    use SerializesModels;

    /**
     * @var Invoice
     */
    public $invitation;

    public $reminder;

    public $company;

    public $event_vars;

    /**
     * Create a new event instance.
     *
     * @param InvoiceInvitation $invitation
     * @param Company $company
     * @param array $event_vars
     */
    public function __construct(InvoiceInvitation $invitation, Company $company, array $event_vars, string $reminder)
    {
        $this->invitation = $invitation;
        $this->company = $company;
        $this->event_vars = $event_vars;
        $this->reminder = $reminder;
    }
}
