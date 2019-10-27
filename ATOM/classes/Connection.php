<?php
class Connection
{
    public static function getConnection()
	 {
	 	 try
            {
            $connection = new PDO(DB_DRIVE . ':host='. DB_HOSTNAME . ';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
            return $connection;
            } 
        catch(PDOException $e)
            {
                throw new PDOException($e);
                return $e;
            }
	 }
}