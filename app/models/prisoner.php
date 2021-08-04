<?php

class Prisoner extends DbModel
{
    const STATUS_INACTIVE = 'inactive';
    const STATUS_ACTIVE = 'active';
    const STATUS_DELETED = 'deleted';

    public $firstname;
    public $surname;
    public $gender;
    public $status = self::STATUS_INACTIVE;
    public $nationalId;
    public $DOB;
    public $evictedOn;

    public function tableName()
    {
        return 'prisoner';
    }

    public function attributes()
    {
        return ['firstname', 'surname', 'gender','status', 'nationalId', 'DOB', 'evictedOn'];
    }

    public function save()
    {
        return parent::save();
    } 

    public function rules()
    {
        return [
            'firstname' => [self::$RULE_REQUIRED],
            'surname' => [self::$RULE_REQUIRED],
            'gender' => [self::$RULE_REQUIRED],
            'nationalId' => [self::$RULE_REQUIRED, [self::$RULE_UNIQUE, 'class' => self::class]],
            'DOB' => [self::$RULE_REQUIRED],
            'evictedOn' => [self::$RULE_REQUIRED]
        ];
    }
}