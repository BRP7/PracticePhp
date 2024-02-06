<?php
class query_executor
{
    public function execute($conn,$query)
    {
        $res=mysqli_query($conn,$query);
        if(is_object($res))//as select query returns  mysqli_result object
        {
            return $res;
        }
        else if($res==true)
        {
            return "query executed";
        }
        else if($res==false)
        {
            return "querry not executed".mysqli_error($conn);
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
?>