<style>
    *{
        font-family: Arial, Helvetica, sans-serif;
    }
</style>

<?php

spl_autoload_register(function ($class_name) {
    require_once './classfolder/' . $class_name . '.php';
});

$stephen = new Author("King", "Stephen");
$Book1 = new Book("Ca", "1138", "1986-02-19", 20.20, $stephen);
$Book2 = new Book("Simerierre", "374", "1983-02-19", 15.10, $stephen);
$Book3 = new Book("Le Fléau", "823", "1978-02-19", 14.30, $stephen);
$Book4 = new Book("Shining", "447", "1977-02-19", 16.10, $stephen);

echo $stephen;
$stephen->afficherBibliographie();
echo $stephen->getTotalprice();