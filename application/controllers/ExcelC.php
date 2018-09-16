<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExcelC extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Curd_Model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Export_Model','export');
    }

    public function excel_import()
    {
       // echo FCPATH."upload/";
        echo base_url('upload/');
        $this->load->view('layout/header.php');
        $this->load->view('layout/nav.php');
        $this->load->view('excel_V.php');
        $this->load->view('layout/footer.php');
    }

  
    public function import_data()
    {
      $config = array(
          "upload_path" => FCPATH.'upload/',
          "allowed_types" => "xls",
          "max_size" => "5000"
      );
      $this->load->library('upload',$config);
      if($this->upload->do_upload('file'))
      {
        $data = $this->upload->data();
        $this->load->library('excel');
        $object = PHPExcel_IOFactory::load($data['full_path']);
        foreach($object->getWorksheetIterator() as $worksheet) {
            $higestRow = $worksheet->getHighestRow();
            $higestColumn = $worksheet->getHighestColumn();
            for($row = 2;$row<=$higestRow;$row++)
            {
                $name = $worksheet->getCellByColumnAndRow(0,$row)->getValue();
                $email = $worksheet->getCellByColumnAndRow(1,$row)->getValue();
                $feedback = $worksheet->getCellByColumnAndRow(2,$row)->getValue();
                $data_excel[] = array(
                    'name' => $name,
                    'email' => $email,
                    'feedback' => $feedback
                ); 
            }
          $result =  $this->export->insert($data_excel);
            echo "<pre>";
            print_r($data_excel);
            echo "</pre>";
        }
      }
    //   $config = array(
    //       "upload_path" => FCPATH.'upload/',
    //       "allowed_types" => "xls",
    //       "max_size" => "5000"
    //   );
    //   $this->load->library('upload',$config);
    //   if($this->upload->do_upload('name_file'))
    //   {
    //     $data = $this->upload->data();
    //     @chmod($data['full_path'],0777);
    //     $this->load->library('Spreadsheet_Excel_Reader');
    //     $this->spreadsheet_excel_reader->setOutputEncoding('CP1251');
    //     $data->read($data['full_path']);
    //     error_reporting(0);
    //     $sheets = $this->spreadsheet_excel_reader->sheets[0];
    //     $data_excel = array();
    //     for($i = 1; $i <= $sheets['numRows']; $i++) {
    //         if($sheets['cells'][i][1] == '')break;
    //         $data_excel[$i -1]['NAME'] = $sheets['cells'][i][1];
    //         $data_excel[$i -1]['PHONE'] = $sheets['cells'][i][2];
    //         $data_excel[$i -1]['ADDRESS'] = $sheets['cells'][i][3];
    //     }
    //     echo "<pre>";
    //     print_r($data_excel);
    //     echo "</pre>";
    //   }
    }
    public function export_data()
    {
        $this->load->library('excel');
        $object = new PHPExcel();
        $object->setActiveSheetIndex(0);
        $table_columns = array("Name","Email","Feedback");
        $column = 0;
        foreach($table_columns as $field)
        {
            $object->getActiveSheet()->setCellValueByColumnAndRow($column,1,$field);
            $column++;
        }
        $feedbackInfo = $this->export->getfeedback();
       // print_r($feedbackInfo);
        $excel_row = 2;
        foreach($feedbackInfo as $data)
        {
             $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$data->name);
             $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$data->email);
             $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$data->feedback);
             $excel_row++;
        }
      
        $object_writer = PHPExcel_IOFactory::createWriter($object,'Excel5');
        
        header('Content-Type: application/vnd.ms-excel');
         
        header('Content-Disposition: attachment;filename="feedbackdata.xls"');
        $object_writer->save('php://output');
    }
    
}
