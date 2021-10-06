<?php
    interface mon{
        public function connectTO220();
        public function connect();
        public function getInfo();
        public function msg();
        public function display();
        public function disconnect();
        public function disconnectTO220();
    }

    class Monitor{
        private $brand, $matrix, $connectTO220, $display, $isConnect;

        function __construct($brand, $matrix){
            $this->brand = $brand;
            $this->matrix = $matrix;
            $this->display = $display;
        }

        function __destruct(){
            echo "<br><h1><strong>Объект Уничтожен</strong></h1><br>";
        }

        public function getInfo(){
            return "{$this->brand}<br>" . "Монитор подключен = {$this->msg()}";
        }

        public function msg(){
            if($this->IsConnect){
                return "Да";
            } else{
                return "Нет";
            }
        }

        // Ф-ия подключения к устройству
        public function connect(){
            $this->IsConnect = true;
            echo "Подключено к устройству<br>";
        }

        // Ф-ция подключения к 220
        public function connectTO220(){
            $this->connectTO220 = true;
        }

        //Ф-ция отключения
        public function disconnect(){
            $this->IsConnect = false;
            echo "Отключено от устройства<br>";
        }

        // Ф-ция отключекния от 220
        public function disconnectTO220(){
            $this->connectTO220 = false;
        }

        //Ф-ция ототбражения картинки
        public function display(){
            if ($this->connectTO220 and $this->IsConnect){
                $this->display = true;
                echo 'Выводится изображение';
            }
            else{
                $this->display = false;
                echo 'Ошибка, монитор не подключен';
            }
        }
    }