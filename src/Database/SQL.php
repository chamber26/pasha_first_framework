<?php


namespace App\Database;


class SQL extends Connection
{

    private $fields = [];
    private $from = "";
    private $where = [];

    public function get()
    {
        if (count($this->where)){
            $h = sprintf(
           'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            $this->from,
            join('AND ', $this->where));
        }else {
                 $h =  sprintf(
                'SELECT %s FROM %s',
                join(', ', $this->fields),
                $this->from);
        }
        return $this->connect($h);
    }

    public function select(array $fields)
    {
        $this->fields = $fields;
        return $this;
    }

    public function from($table)
    {
        $this->from = $table;
        return $this;
    }

    public function where($condition)
    {
        $this->where[] = $condition;
        return $this;
    }

// first замість get має повернути першу строку масиву

    public function first()
    {

    }

// orderBy має сортувати по значенню поля (як сортувати в MySQL)

    public function orderBy()
    {

    }

// groupBy (як групувати в MySQL)

    public function groupBy()
    {

    }

//  розібратися з join в MySQL

    public function join()
    {

    }

//  розібратися з обмеженням кількості виводимих даних в MySQL

    public function limit()
    {

    }

//  розібратися з count в MySQL

    public function count()
    {

    }



}

