<?php
    class Database {
        public $conn;

        function __construct(){
            $this->conn = new mysqli('sql110.infinityfree.com', 'if0_35007240', 'YWhT8rAQ8aSjNE', 'if0_35007240_unp_ppweb');
            if ($this->conn->connect_error) {
                die("Koneksi gagal: " . $this->conn->connect_error);
            }
        }

        function loadData($query){
            $result = $this->conn->query($query);
            if ($result->num_rows > 0) {
                return $result->fetch_all(MYSQLI_ASSOC);
            } else {
                return [];
            }
        }
        
        function inUpDelData($query){
            if ($this->conn->query($query) === TRUE) {
                return 'Berhasil';
            } else {
                return 'Gagal';
            }
        }

        function generateRandomCode($length = 6) {
            $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = str_shuffle($characters);
            $randomCode = substr($randomString, 0, $length);
            return $randomCode;
        }

        function generateSesi($length = 60) {
            $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_';
            $randomString = str_shuffle($characters);
            $randomCode = substr($randomString, 0, $length);
            return $randomCode;
        }

        function sendMessage($nowa, $message){
            $url = 'https://api.green-api.com/waInstance7103861629/sendMessage/b173520b71584ca48cb21d9e475cf0ae7cba36d183024f18a9';
            $data = array(
                'chatId' => $nowa . '@c.us',
                'message' => $message,
            );

            $json_data = json_encode($data);
            $ch = curl_init($url);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Content-Type: application/json" 
            ]);

            $response = curl_exec($ch);
            return $response;
        }
    }
?>