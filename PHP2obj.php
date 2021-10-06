<?php
    interface key{
        public function connect();
        public function getInfo();
        public function msg();
        public function Input();
        public function disconnect();
    }

    class Keyboard{
        private  $brand, $keys, $inputText, $connect; 
    

    function __construct($brand, $keys){
        $this->brand = $brand;
        $this->keys = $keys;
        $this->inputText = $inputText;
    }

    function __destruct(){
        echo "<br><h1><strong>Объект Уничтожен</strong></h1><br>";
    }

    public function getInfo(){
        return "{$this->brand}<br>" . "Клавиатура подключена = {$this->msg()}";
    }

    public function msg(){
        if($this->IsConnect){
            return "Да";
        }
        else{
            return "Нет";
        }
    }

    // Ф-ия подключения к устройству
    public function connect(){
        $this->connect = true;
        echo "Подключено к устройству<br>";
    }

    //Ф-ция отключения
    public function disconnect(){
        $this->connect = false;
        echo "Отключено от устройства<br>";
    }

    //Ф-ция ввода информации
    public function Input(){
        if ($this->connect = true){
            $this->inputText = true;
            echo 'Клавиатура работает нормально';
        }
        else{
            $this->inputText = false;
            echo 'Клавиатура не подключена';
        }
    }
}