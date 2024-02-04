<?php

namespace App\Models\orderModels;
use App\Models\Order;

class Work extends Order
{
//------------------------------------------------------------------//
//----------------------变量声明 -- 对应数据库属性----------------------//
//------------------------------------------------------------------//
    protected $DOB;//四柱
    protected $gender;//性别
    protected $position; //经纬度相对于中牟的位置
    protected $yao; //测客选的爻
    protected $question; //问题补充说明
//------------------------------------------------------------------//
//------------------CRUD OPERATIONS 模型对数据库操作-------------------//
//------------------------------------------------------------------//
    public function childCreat() //插入数据
    {

        $conn = new  \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "INSERT INTO `work_order` VALUES (NULL, '$this->DOB', '$this->gender', '$this->position', '$this->yao', '$this->question')";
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
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getYao()
    {
        return $this->yao;
    }

    /**
     * @param mixed $yao
     */
    public function setYao($yao): void
    {
        $this->yao = $yao;
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