<?php

/*
 * This file is part of the Kimai time-tracking app.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Reporting;

final class WeekByUser extends DateByUser
{
    /**
     * @var \DateTime
     */
    private $endDate;

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTime $date): self
    {
        $this->endDate = $date;

        return $this;
    }
}
