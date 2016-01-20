<?php
namespace app\commands;
use yii\console\Controller;
use app\models\Observations;

class ExportController extends Controller {
	
	public function actionCreate() {
		echo "=== Starting export sequence at ".date("d-m-Y h:i")." ===\r\n";
		
		echo "Fetching all records from the 'occurences' view\r\n";
		$query = (new \yii\db\Query())->from('occurences');
		
		if($query->count()) {
			echo "Found ".$query->count()." record, continuing\r\n";
			$occurences = $query->all();
			
			$fileName = "identifier occurences-".date("Y-m-d-H:i");
			echo "Creating the export csv with identifier ".$fileName.".zip\r\n";
			$csvFile = fopen(__DIR__."/../web/nlbif/".$fileName.".csv", "w");
			
			echo "Writing csv structure on first line of document \r\n";
			fputcsv($csvFile, array_keys($occurences[0]), ',', "'")."\r\n";
			
			echo "Looping trough all the results\r\n";
			foreach($occurences as $occurence) {
				foreach($occurence as $key => &$value) {
					if(is_null($value)) continue;
					switch($key) {
						case 'sex': 					$value = Observations::getSexById($value); break;
						case 'lifeStage': 				$value = Observations::getAgeById($value); break;
						case 'reproductiveCondition': 	$value = Observations::getSexualStatusById($value); break;
					}
				}
				array_map('utf8_encode', $occurence);
				fputcsv($csvFile, $occurence, ',', "'")."\r\n";
			}
			
			echo "Bundling and compressing..\r\n";
			$zip = new \ZipArchive();
			$zip->open(__DIR__."/../web/nlbif/".$fileName.".zip", \ZipArchive::CREATE);
			$zip->addFile(__DIR__."/../web/nlbif/EML.xml", "EML.xml");
			$zip->addFile(__DIR__."/../web/nlbif/meta.xml", "meta.xml");
			$zip->addFile(__DIR__."/../web/nlbif/".$fileName.".csv", $fileName.".csv");
			$zip->close();
			
			echo "Cleaning up..\r\n";
			unlink(__DIR__."/../web/nlbif/".$fileName.".csv");
			
			echo "All done!\r\n";
			
		} else {
			echo "Couldn't find any records, exiting\r\n";
		}
		
		echo "=== Finished export sequence at ".date("d-m-Y h:i")." ===\r\n";
	}
	
}