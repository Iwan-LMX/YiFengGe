<?php

namespace App\Models\orderModels;

use App\Models\Order;

class Marriage extends Order
{
//------------------------------------------------------------------//
//----------------------变量声明 -- 对应数据库属性----------------------//
//------------------------------------------------------------------//
    protected $single;
    protected $gender;//性别
    protected $DOB_M; //男性生日
    protected $DOB_W; //女性生日
    protected $yao; //测客选的爻
    protected $question; //问题补充说明
//------------------------------------------------------------------//
//------------------CRUD OPERATIONS 模型对数据库操作-------------------//
//------------------------------------------------------------------//
    public function childCreat() //插入数据
    {
        $conn = new  \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $sql = "INSERT INTO `marriage_order` (`marriage_id`, `single`, `gender`, `DOB_M`, `DOB_W`, `yao`, `question`) VALUES (NULL, '$this->single', '$this->gender', '$this->DOB_M', '$this->DOB_W', '$this->yao', '$this->question')";

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
    public function getSingle()
    {
        return $this->single;
    }

    /**
     * @param mixed $single
     */
    public function setSingle($single): void
    {
        $this->single = $single;
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
    public function getDOBM()
    {
        return $this->DOB_M;
    }

    /**
     * @param mixed $DOB_M
     */
    public function setDOBM($DOB_M): void
    {
        $this->DOB_M = $DOB_M;
    }

    /**
     * @return mixed
     */
    public function getDOBW()
    {
        return $this->DOB_W;
    }

    /**
     * @param mixed $DOB_W
     */
    public function setDOBW($DOB_W): void
    {
        $this->DOB_W = $DOB_W;
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