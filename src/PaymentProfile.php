<?php
class PaymentProfile
{
    private ?Id $id = null;

    public function setId(Id $id):void
    {
        $this->id = $id;
    }

    public function getId(): ?Id
    {
        return $this->id;
    }
}



?>