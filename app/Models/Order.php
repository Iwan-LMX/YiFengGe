<?php
//和数据库交互用于生成和记录用户的订单
namespace App\Models;
class Order{
//------------------------------------------------------------------//
//----------------------变量声明 -- 对应数据库属性----------------------//
//------------------------------------------------------------------//
    protected $id;//本系统标志
    protected $cipher;//加密代码
    protected $email; //邮箱
    protected $mobile; //电话
    protected $time; //订单时间
    protected $channel; //交易渠道
    protected $transaction; //交易号
    protected $description; //所需服务描述
    protected $status; //订单状态
    protected $work_id;
    protected $study_id;
    protected $marriage_id;
    protected $naming_id;
//------------------------------------------------------------------//
//------------------CRUD OPERATIONS 模型对数据库操作-------------------//
//------------------------------------------------------------------//
    public function parentCreat(array $data) //插入数据
    {
        require_once APP_ROOT;
    }

    public function parentRead(int $id)
    {

    }

    public function parentUpdate(int $id, array $data)
    {

    }

    public function parentDelete(int $id)
    {

    }


//获取值methods 和设置值
    public function getId()
    {
        return $this->id;
    }
    public function getCipher()
    {
        return $this->cipher;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getMobile()
    {
        return $this->mobile;
    }
    public function getTime()
    {
        return $this->time;
    }
    public function getChannel()
    {
        return $this->channel;
    }
    public function getTransaction()
    {
        return $this->transaction;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function getWorkId()
    {
        return $this->work_id;
    }
    public function getStudyId()
    {
        return $this->study_id;
    }
    public function getMarriageId()
    {
        return $this->marriage_id;
    }
    public function getNamingId()
    {
        return $this->naming_id;
    }

//Set() 方法
    public function setCipher(string $cipher)
    {
        $this->cipher = $cipher;
    }
    public function setTime($time)
    {
        $this->time = $time;
    }
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setMobile(string $mobile)
    {
        $this->mobile = $mobile;
    }
    public function setChannel(string $channel)
    {
        $this->channel = $channel;
    }
    public function setTransaction(string $transaction)
    {
        $this->transaction = $transaction;
    }
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    public function setStatus(string $status)
    {
        $this->status = $status;
    }
    public function setWorkId(int $work_id)
    {
        $this->work_id = $work_id;
    }
    public function setStudyId(int $study_id)
    {
        $this->study_id = $study_id;
    }
    public function setMarriageId(int $marriage_id)
    {
        $this->marriage_id = $marriage_id;
    }
    public function setNamingId(string $naming_id)
    {
        $this->naming_id = $naming_id;
    }
}