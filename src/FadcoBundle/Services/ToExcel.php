<?php
namespace FadcoBundle\Services;

use Doctrine\ORM\EntityManager;
use FadcoBundle\Entity\AlerteSms;

class ToExcel {

    /**
    *
    * @var EntityManager
    */
    protected $em;
    protected $conn;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->conn = $em->getConnection();
    }

    public function toExcel($sql, $filename, $exception = array(), $bool)
    {
        $result = $this->conn->fetchAll($sql);

        $count = 0;

        $file_ending = "xls";
        //header info for browser
        header("Content-Type: application/xls");    
        header("Content-Disposition: attachment; filename=$filename.xls");  
        header("Pragma: no-cache"); 
        header("Expires: 0");
        /*******Start of Formatting for Excel*******/   
        //define separator (defines columns in excel & tabs in word)
        $sep = "\t"; //tabbed character
        //start of printing column names as names of MySQL fields
        foreach ($result as $key => $row)
        {
            //echo $key . "\t";
            foreach ($row as $k => $value)
            {
                if($bool)
                {
                    if(!in_array($k, $exception))
                    {
                        echo $k . "\t";
                        $count++;
                    }
                } else
                {
                    if(in_array($k, $exception))
                    {
                        echo $k . "\t";
                        $count++;
                    }
                }
            }
            break;
        }
        print("\n");   
        //end of printing column names  
        //start while loop to get data
        foreach ($result as $key => $row)
        {
            $schema_insert = "";
            foreach ($row as $k => $value)
            {
                if($bool)
                {
                    if(!in_array($k, $exception))
                    {
                        if(!isset($value))
                        $schema_insert .= "NULL".$sep;
                        elseif ($value != "")
                        $schema_insert .= "$value".$sep;
                        else
                        $schema_insert .= "".$sep;
                    }
                } else
                {
                    if(in_array($k, $exception))
                    {
                        if(!isset($value))
                        $schema_insert .= "NULL".$sep;
                        elseif ($value != "")
                        $schema_insert .= "$value".$sep;
                        else
                        $schema_insert .= "".$sep;
                    }
                }
            }
            $schema_insert = str_replace($sep."$", "", $schema_insert);
            $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
            $schema_insert .= "\t";
            print(trim($schema_insert));
            print "\n";
        } 

        die();
    }
}