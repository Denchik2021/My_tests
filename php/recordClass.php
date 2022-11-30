<?php
#header('Content-Type: text/html; charset=UTF-8');
mb_internal_encoding('UTF-8');

#require_once("database.php");

class record_Class
{

    private static $teacher;
    private static $discipline;
    private static $summ;
    private static $date;
    private static $namefield = array();
    private static $alldata = array();
    private $host = "localhost";
    private $db_name = "univer";
    private $username = "root";
    private $password = "root";
    static $instances = 0;
    private $connect;
    private $strSql;
    private $dataBaseName;
    private $connection;
    private $result;


    public function __construct($host, $username, $password,$db_name)
    {
        if (record_Class::$instances == 0) {
            $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->db_name)
            or die(mysqli_error(record_Class::$instances) . "Error: " . mysqli_errno(record_Class::$instances));
            record_Class::$instances = 1;
            //print_r("Подключились успешно к БД");
        } else {
            print_r ("Close exiting instance Mysql");
        }
    }

    public function createResult($strSql, $dataBaseName, $connection) {
        $this->strSql=$strSql;
        $this->dataBaseName=$dataBaseName;
        $this->connection=$connection;

        mysqli_select_db($this->connect, $dataBaseName) or die (mysqli_error($this->connect). " 
        Error no:".mysqli_errno($this->connect));

        $this->result = mysqli_query($this->connect, $strSql )
            or die ( mysqli_error(). " Error no:".mysqli_errno());
    }

    public function getRow(){
        return mysqli_fetch_array($this->result);
    }

    public static function returnArray($name,$lesson,$sum_lesson,$date_sum)
    {
        array_push(
            self::$alldata,
            self::$teacher = $name,
            self::$discipline = $lesson,
            self::$summ = $sum_lesson,
            self::$date = $date_sum
        );
        return self::$alldata;
    }

    public static function returnNamefields()
    {
        array_push(
            self::$namefield,
            $namefield['num'] = "#",
            $namefield['teacher'] = 'Назначение средств',
            $namefield['dis'] = 'Дисциплина',
            $namefield['summ'] = 'Сумма',
            $namefield['date'] = 'Дата сбора',
            $namefield['del'] = 'Удалить');
        return self::$namefield;
    }

    public function returnAllData()
    {

        foreach ($this->returnArray() as $key) {
            return $key;
        }
    }

    function changeDateFormat($sourceDate, $newFormat) {
        $r = date($newFormat, strtotime($sourceDate));
        return $r;
    }
}