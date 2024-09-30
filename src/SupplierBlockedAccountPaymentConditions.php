<?php

namespace PhpTwinfield;

class SupplierBlockedAccountPaymentConditions
{
    private $percentage;     # float        Percentage that should be paid to the blocked bank account.
    private $includevat;     # true/false   Is this the default bank account, only one default bank account is possible.

    public function getPercentage(): float
    {
        return $this->percentage;
    }

    public function setPercentage(float $percentage): self
    {
        $this->percentage = $percentage;
        return $this;
    }

    public function getIncludevat()
    {
        return $this->includevat;
    }

    public function setIncludevat($includevat)
    {
        $this->includevat = $includevat;
        return $this;
    }
}
