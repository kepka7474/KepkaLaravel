<?php





class Builder2222 extends Database2222{
    public string $table;

    function get(){
        $result =  mysqli_query($this->connect, "SELECT * FROM {$this->table}");
        return mysqli_fetch_all($result);
    }

    function create($data){
        $colums = '(';
        $values = '(';
        foreach ($data as $key => $value){
            $colums.= $key.',';
            $values .= "'$value',";

        }
        $colums = rtrim($colums, ',');
        $colums .= ')';

        $values = rtrim($values, ',');
        $values .= ')';

//        mysqli_query($this->connect, "INSERT INTO $this->table ($colums) VALUES ($values)");
        print_r("INSERT INTO $this->table $colums VALUES $values");
//        echo '<br>';
//        print_r("INSERT INTO $this->table (name, user_id) VALUES ('Golod', '3')");

    }

    function where($key, $value){
        $result = mysqli_query($this->connect, "SELECT * FROM {$this->table} WHERE {$key} = '{$value}'");
        return mysqli_fetch_row($result);
    }

    function whereAll($key, $value){
        $result = mysqli_query($this->connect, "SELECT * FROM {$this->table} WHERE {$key} = '{$value}'");
        return mysqli_fetch_all($result);
    }
}
//class Builder2222 extends Database2222{
//
//    public string $table;
//
//    function get(){
//        $result =  mysqli_query($this->connect, "SELECT * FROM {$this->table}");
//        return mysqli_fetch_all($result);
//    }
//
//    function where($key, $value){
////        $result = mysqli_query($this->connect, "SELECT * FROM {$this->table} WHERE {$key} = {$value}");
////        echo "SELECT * FROM {$this->table} WHERE {$key} = {$value}";
//        $result = mysqli_query($this->connect, "SELECT * FROM {$this->table} WHERE {$key} = {$value}");
//        die;
//        return mysqli_fetch_row($result);
//    }
//
//    function whereAll($key, $value){
//        $result = mysqli_query($this->connect, "SELECT * FROM {$this->table} WHERE {$key} = {$value}");
//        return mysqli_fetch_all($result);
//    }
//}