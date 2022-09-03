<?php

interface PaymentInterface {
    public function amount();
}

class CashPayment implements PaymentInterface {
    public function amount() {
        return 100;
    }
}

class MobilePayment implements PaymentInterface {
    public function amount() {
        return 90;
    }
}
    ?>

<?php 

class PayMent {
    private $paymentMethod;

    public function pay($context) {
        switch($context) {
            case "cash": 
                $this->paymentMethod = new CashPayment;
                break;
            case "mobile": 
                $this->paymentMethod = new MobilePayment;
                break;
            default: 
                $this->paymentMethod = new CashPayment;
        }

        return $this->paymentMethod->amount();
    }
}

$payment = new PayMent;
echo $payment->pay("cash"). " MMK";
