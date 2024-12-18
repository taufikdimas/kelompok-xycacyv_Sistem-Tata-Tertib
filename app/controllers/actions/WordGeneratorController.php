<?php
require_once __DIR__ . "/../../../vendor/autoload.php";
require_once __DIR__ . "/../utils/setData.php";

use PhpOffice\PhpWord\TemplateProcessor;
class WordGeneratorController
{
    public function generateWordFromTemplate()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $templateFilePath = __DIR__ . "/../../../assets/word/surat_peringatan.docx";
            $tempDocxFile = __DIR__ . "/../../../assets/word/temp.docx";

            $nama = isset($_POST['nama']) ? ucwords($_POST['nama']) : "";
            $nim = isset($_POST['nim']) ? $_POST['nim'] : "";
            $tanggalPelaporan = isset($_POST['tanggal']) ? setTimeWithMonthName($_POST['tanggal']) : "";
            $tanggalSurat = setTimeWithMonthName(date("Y-m-d"));

            $templateProcessor = new TemplateProcessor($templateFilePath);

            $templateProcessor->setValue('nama', $nama);
            $templateProcessor->setValue('nim', $nim);
            $templateProcessor->setValue('tanggalPelaporan', $tanggalPelaporan);
            $templateProcessor->setValue('tanggalSurat', $tanggalSurat);

            $templateProcessor->saveAs($tempDocxFile);

            header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
            header("Content-Disposition: attachment; filename=surat_pernyataan.docx");
            readfile($tempDocxFile);

            unlink($tempDocxFile);
        }
    }
}
?>