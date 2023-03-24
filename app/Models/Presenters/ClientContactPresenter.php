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

namespace App\Models\Presenters;

/**
 * Class ClientContactPresenter.
 */
class ClientContactPresenter extends EntityPresenter
{
    /**
     * @return string
     */
    public function name()
    {
        $contact_name = $this->entity->first_name.' '.$this->entity->last_name;

        if (strlen($contact_name) > 1) {
            return $contact_name;
        }

        return $this->entity->client->present()->name();
    }

    public function first_name()
    {
        return $this->entity->first_name ?: '';
    }

    public function last_name()
    {
        return $this->entity->last_name ?: '';
    }
}
