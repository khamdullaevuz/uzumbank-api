<?php

class Config
{
    const APP_NAME = "MVC";

    const SERVICE_ID = "1111";
    const AUTH_TOKEN = "dXp1bTpiYW5r"; // login:parol

    const MIN_AMOUNT = 1_000;
    const MAX_AMOUNT = 1_000_000;

    const HOSTNAME = "localhost";
    const DBNAME = "uzumbank";
    const USERNAME = "root";
    const PASSWORD = "";
    const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
}