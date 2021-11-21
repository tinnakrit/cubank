<?php namespace Output;

final class Outputs {
    public $accountNumber; // CHAR(10)
    public $accountName; // <= CHAR(50)
    public $accountBalance; // 0 and positive integer
    public $billAmount; // 0 and positive integer
    public $errorMessage; // For failure case, String
}
