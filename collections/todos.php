<?php

class todos extends database\collection
{
    protected static $modelName = 'todo';

    //This is the function to write to find tasks by user ID for listing on their homepage.
    //Don't forget to return the record set see findAll in the collection class
    public static  function findTasksbyID($userid) {

        $tableName = get_called_class();
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE ownerid = ?';

        //grab the only record for find one and return as an object
        $recordSet = self::getResults($sql, $userid);

        if (is_null($recordSet)){
            return FALSE;
        }else{
            return $recordSet;
        }

    }
}

?>
