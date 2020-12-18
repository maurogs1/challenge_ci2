
<?php 
    class UploadC extends CI_Controller{
        const PATH_TO_SAVE = "./uploads/files/";

        public function __construct()
	{
		parent::__construct();
		$this->load->library("excel");

	}
        public function index(){
            $this->load->view('upload/upload');
          
        }

        private function loadUploadConfiguration(){
            $config['upload_path'] = UploadC::PATH_TO_SAVE;
            $config['allowed_types'] = 'xls|xlsx|';
            $config['max_size'] = '4000';
            $this->load->library('upload', $config);
        }

        public function uploadExcel(){
            $this->loadUploadConfiguration();            
            if(!$this->upload->do_upload('file'))
               echo $this->upload->display_errors();
            else {
                $path = $this->upload->data()['file_name'];
                $this->getExcelData($path);
            }
        }

        private function getExcelData($savedPath){
            $path = UploadC::PATH_TO_SAVE.$savedPath;
            $object = PHPExcel_IOFactory::load($path);
            $rowNumber = 6;
            $worksheet = $object->setActiveSheetIndex(0);
                while($worksheet->getCellByColumnAndRow(0,$rowNumber)->getValue() != ""){
                    $journal_ = $worksheet->getCellByColumnAndRow(0, $rowNumber)->getValue();
                    $dadada = $worksheet->getCellByColumnAndRow(1, $rowNumber)->getValue();
                    $rowNumber++;
                }
                $this->deleteSavedFile(path);
            }
        }  

        private deleteSavedFile($path){
            unlink($path);
        }
?>