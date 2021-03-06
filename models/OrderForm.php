<?php


namespace app\models;


use yii\base\Model;

class OrderForm extends Model
{
    public $firstName;
    public $lastName;
    public $city;
    public $address;
    public $email;
    public $phoneNum;
    public $comment;
    public $basket;
    public $payment;
    public $isAgree;

    public function rules()
    {
        return [

            ['email', 'trim'],
            [['email', 'firstName', 'lastName', 'city', 'phoneNum', 'payment', 'address'], 'required'],
            [
                'isAgree',
                'compare',
                'compareValue' => 1,
                'message' => 'Необходимо прочитать условия покупки и согласиться',
            ],
            ['email', 'email'],
            [['email', 'firstName', 'lastName', 'city', 'address'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'firstName' => 'Имя',
            'lastName' => 'Фамилия',
            'city' => 'Город',
            'address' => 'Адресс доставки',
            'email' => 'Email',
            'phoneNum' => 'Номер телефона',
            'comment' => 'Комментарий',
            'isAgree' => 'Я прочитал и согласен с условиями покупки',
            'payment' => 'Оплата',
        ];
    }
}