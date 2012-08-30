<?
/*
$path = '/var/www/vhosts/www.aloha-editor.com/test/aloha-nightly/aloha';

$languages = array ("en", "de", "it", "fi", "es", "ru" );

function process_dir($dir,$recursive = FALSE, $lastdir) {
    if (is_dir($dir)) {
      for ($list = array(),$handle = opendir($dir); (FALSE !== ($file = readdir($handle)));) {
        if (($file != '.' && $file != '..') && (file_exists($path = $dir.'/'.$file))) {
          if (is_dir($path) && ($recursive)) {
            $list = array_merge($list, process_dir($path, TRUE, $file));
	  } else {
	    if ($lastdir == 'i18n') {
	      $path_arr = explode('/', $path);
	      $lang => $file[0].$file[1];
              $entry = array(
	        'package' => $path_arr[count($path_arr)-3],
                'file' => $dir.'/'.$file,
	        'filename' => $file, 
		'dir' => $dir
		//'entries' => parse_properties(dir.'/'.$file)
	      );
              // Actions to be performed on ALL ITEMS
              $list[$lang] = $entry;
	    }
          }
        }
      }
      closedir($handle);
      return $list;
    } else return FALSE;
}
      function parse_properties($txtProperties) {
		$result = array();
		$lines = split("\n", $txtProperties);
		$key = "";
		$isWaitingOtherLine = false;
		foreach ($lines as $i => $line) {
			if (empty($line) || (!$isWaitingOtherLine && strpos($line, "#") === 0))
				continue;

			if (!$isWaitingOtherLine) {
				$key = substr($line, 0, strpos($line, '='));
				$value = substr($line, strpos($line, '=')+1, strlen($line));
			}
			else {
				$value .= $line;
			}	

			/* Check if ends with single '\' */
			if (strrpos($value, "\\") === strlen($value)-strlen("\\")) {
				$value = substr($value,0,strlen($value)-1)."\n";
				$isWaitingOtherLine = true;
			}
			else {
				$isWaitingOtherLine = false;
			}

			$result[$key] = $value;
			unset($lines[$i]);
		}

		return $result;
	}

$dict_entries = process_dir($path,TRUE);

*/

?>
