<?php
class Transaction
{
    private ?Customer $customer = null;

    public function __construct(
        private float $amount,
        private string $description
    )
    {
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }


}

?>