<?php

require_once 'DBConnection.php';

class ServiceAuthentication{

    public static function accountAuthenticationProvider(string $accNo): array {
        return DBConnection::accountInformationProvider($accNo);
    }

}
