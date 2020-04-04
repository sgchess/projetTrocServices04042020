<?php

/**
 * ce fichier ne contient que des données statiques pour l'accès à la base de données.
 * On insère ce fichier dans le Model.php
 * Ainsi, on ne change ces données que dans ce seul fichier (factorisation de code)
 */

class Config {

	private static $hostname = "webinfo.iutmontp.univ-montp2.fr";
    private static $dbname   = "hussona";
    private static $login    = "hussona";
    private static $password = "1107040190E";

    public static function getHostname() {
    	return self::$hostname;
    }

    public static function getDBname() {
    	return self::$dbname;
    }

    public static function getLogin() {
    	return self::$login;
    }

    public static function getPassword() {
    	return self::$password;
    }
}

?>