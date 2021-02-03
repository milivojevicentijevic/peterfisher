<?php
interface StandardPayment 
{
    public function pay();
}
interface FraudCheckCheck 
{
    public function fraudCheck();
}
interface ThreeDSecureCheck 
{
    public function threeDCheck();
}
interface PaymentProcess
{
    public function process();
}