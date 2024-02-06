<?php
class Lib_Connection
{
    protected $_conn = null;

    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        if (is_null($this->_conn)) {
            $this->_conn = mysqli_connect("localhost", "root", "", "ccc_practice");
            if ($this->_conn === false) {
                die("<h3 style='color: red;'>ERROR: Could not connect. "
                    . mysqli_connect_error() . "</h3>");
            }
        }
        return $this->_conn;

    }

    public function exec($sql)
    {
        try {
            $result = $this->connect()->query($sql);
    
            if ($result === false) {
                // Output the SQL error for debugging
                echo "SQL Error: " . $this->connect()->error;
                return null;
            }
    
            return $result;
        } catch (Exception $e) {
            // Output any exception messages for debugging
            echo "Exception: " . $e->getMessage();
            return null;
        }
    }
    public function fetch_asso($res)
    {
        $data=[];
        while($row=mysqli_fetch_assoc($res))
        {
            $data[]=$row;
        }
        return $data;
    }
}