<?php

class App
{
    // Properti untuk menyimpan default controller, method, dan parameter
    protected $controller = 'Home';
    protected $method = 'index';
    protected $param = [];

    // Constructor class, akan dijalankan saat class App diinisialisasi
    public function __construct()
    {
        // Mengambil URL dan mem-parsingnya
        $url = $this->parseURL();

        // Memeriksa apakah file controller yang diminta ada
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0]; // Jika ada, maka controller sesuai URL di-set
            unset($url[0]); // Menghapus elemen pertama (controller) dari array URL
        }

        // Memuat file controller yang sesuai
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller; // Membuat instance controller

        // Memeriksa apakah method yang diminta ada di dalam controller
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1]; // Jika ada, maka method sesuai URL di-set
                unset($url[1]); // Menghapus elemen kedua (method) dari array URL
            }
        }

        // Menyimpan parameter jika ada
        if (!empty($url)) {
            $this->param = array_values($url);
        }

        // Menjalankan controller dan method, dan mengirimkan parameter jika ada
        call_user_func_array([$this->controller, $this->method], $this->param);
    }

    // Fungsi untuk mem-parse URL dan mengembalikan array dari URL yang telah dipecah
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/'); // Menghapus trailing slash (/) dari URL
            $url = filter_var($url, FILTER_SANITIZE_URL); // Membersihkan URL dari karakter yang tidak diizinkan
            $url = explode('/', $url); // Membagi URL berdasarkan karakter slash (/) dan mengubahnya menjadi array
            return $url;
        }

        return [$this->controller]; // Jika URL tidak ada, maka kembalikan default controller
    }
}
