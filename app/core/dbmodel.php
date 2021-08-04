<?php

abstract class DbModel extends Model 
{
    abstract public function tableName();
    abstract public function attributes();

    public function save()
    {
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(function($attr){
            return ":$attr";
        }, $attributes);
        $statement = self::prepare("INSERT INTO $tableName (".implode(',',$attributes)
            .") VALUES (".implode(',', $params).")");
        
        foreach ($attributes as $attribute) {
            $statement->bindValue(":$attribute", $this->{$attribute});
        }

        $statement->execute();

        return true;
    }

    public static function prepare($sql)
    {
        return Application::$app->database->prepare($sql);
    }
}