<?php
namespace app\Controllers;
use app\Formatters\CsvFormatter;

class MainController extends Controller
{

    /**
     * @return string
     */
    public function index(): string
    {
        return $this->render('upload', []);
    }

    /**
     * @return string
     */
    public function allGoods(): string
    {
        $headers = [];
        $goods = [];

        if (isset($_POST["submit"]) && is_uploaded_file($_FILES["csvFile"]["tmp_name"])) {
            $file = $_FILES["csvFile"]["tmp_name"];
            $handle = fopen($file, "r");
            $csvData = [];
            $headers = fgetcsv($handle, 1000, ";", "\n");
            while (($data = fgetcsv($handle, 1000, ";", "\n")) !== FALSE) {
                $csvData[] = $data;

            }
            fclose($handle);

            $formatter = new CsvFormatter();
            $goods = $formatter->fillGoods($csvData);
        } else {
            $this->toHome();
        }
        return $this->render('show', ['headers' => $headers, 'goods' => $goods]);
    }

}