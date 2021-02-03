<?php
require_once 'interfaces.php';
class PayFee implements StandardPayment, ThreeDSecureCheck, PaymentProcess 
{
    public function pay() {}
    public function threeDCheck() {}
    public function process() {
        $this->threeDCheck();
        $this->pay();
    }
}
class WorldFee implements StandardPayment, PaymentProcess 
{
    public function pay() {}
    public function process() {
        $this->pay();
    }
}
class MintFee implements StandardPayment, FraudCheckCheck, PaymentProcess
{
    public function pay() {}
    public function fraudCheck() {}
    public function process() {
        $this->fraudCheck();
        $this->pay();
    } 
}

class PaymentGateway 
{
    public function takePayment(PaymentProcess $paymentType) {
        $paymentType->process();
    }
}