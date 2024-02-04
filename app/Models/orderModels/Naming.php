<?php

namespace App\Models\orderModels;

use App\Models\Order;

class Naming extends Order
{
//------------------------------------------------------------------//
//----------------------变量声明 -- 对应数据库属性----------------------//
//------------------------------------------------------------------//
    protected $person;
    protected $DOB;//出生日期
    protected $surname; //选用的姓氏
    protected $question; //取名要求
//------------------------------------------------------------------//
//------------------CRUD OPERATIONS 模型对数据库操作-------------------//
//------------------------------------------------------------------//
    public function childCreat() //插入数据
    {
        $conn = new  \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "INSERT INTO `nameing_order` (`naming_id`, `person`, `DOB`, `surname`, `question`) VALUES (NULL, '$this->person', '$this->DOB', '$this->surname', '$this->question')";
        // 检测连接
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        }

        if ($conn->query($sql) === TRUE) {
            $this->work_id = $conn->insert_id;
            echo "新记录插入成功";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }

    public function childRead(int $id)
    {

    }

    public function childUpdate(int $id, array $data)
    {

    }

    public function childDelete(int $id)
    {

    }

    /**
     * @return mixed
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param mixed $person
     */
    public function setPerson($person): void
    {
        $this->person = $person;
    }

    /**
     * @return mixed
     */
    public function getDOB()
    {
        return $this->DOB;
    }

    /**
     * @param mixed $DOB
     */
    public function setDOB($DOB): void
    {
        $this->DOB = $DOB;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param mixed $question
     */
    public function setQuestion($question): void
    {
        $this->question = $question;
    }

}