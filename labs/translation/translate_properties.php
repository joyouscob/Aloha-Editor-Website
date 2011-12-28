<?
$path = '/var/www/vhosts/www.aloha-editor.com/test/aloha-nightly/aloha';

$packages = Array(
'aloha',
'com.gentics.aloha.plugins.Format',
'com.gentics.aloha.plugins.Link',
'com.gentics.aloha.plugins.List',
'com.gentics.aloha.plugins.Table'
);

$languages= Array(
'ar',
'sd',
'az',
'bg',
'bn',
'ca',
'cs',
'de',
'el',
'en',
'eo',
'es',
'fa',
'fi',
'fr',
'gu',
'he',
'hi',
'hy',
'id',
'mr',
'it',
'ja',
'ko',
'lv',
'lt',
'ms',
'mk',
'pa',
'pl',
'ps',
'pt',
'ro',
'ru',
'sv',
'ta',
'th',
'tr',
'uk',
'vi',
'yo',
'zh');

// returns
// -1 does not exist
// 0 ok
// 1 needs attention

function check_lanugage($lang) {
  global $dict_entries;
  if (!array_key_exists($lang, $dict_entries)) return -1;
  foreach ($dict_entries['en'] as $package=>$pinfo) {
        if ( array_key_exists('entries', $pinfo) && is_array($pinfo['entries']) ) {
  		foreach($pinfo['entries'] as $k => $v) {
			if ( array_key_exists($lang, $dict_entries)
                                && array_key_exists($package, $dict_entries[$lang])
                                && array_key_exists($k, $dict_entries[$lang][$package]['entries'])
                                && $dict_entries[$lang][$package]['entries'][$k] ){
                        } else {
				return 1;
			}
		}
	}
  }
  return 0;
}

function process_dir($dir,$recursive = FALSE, $lastdir = '') {
    global $dict_entries, $packages, $path;
    if (is_dir($dir)) {
      for ($list = array(),$handle = opendir($dir); (FALSE !== ($file = readdir($handle)));) {
        if (($file != '.' && $file != '..') && (file_exists($_path = $dir.'/'.$file))) {
          if (is_dir($_path) && ($recursive)) {
            $list = array_merge($list, process_dir($_path, TRUE, $file));
          } else {
            if ($lastdir == 'i18n') {
              $path_arr = explode('/', $_path);
              $package = $path_arr[count($path_arr)-3];
              $lang = $file[0].$file[1];
	      $localfile = $dir.'/'.$file;
              $entry = array(
		'file' => str_replace( $path,'', $localfile),
                'localfile' => $localfile,
                'filename' => $file,
                'dir' => $dir,
                //'entries' => Array()
                'entries' => parse_properties($dir.'/'.$file)
              );
	      if ( in_array($package, $packages) ) {
                $dict_entries[$lang][$package] = $entry;
	      }
            }
          }
        }
      }
      closedir($handle);
      return $list;
    } else return FALSE;
}

      function parse_properties($propertyFile) {
                $result = array();
                //$lines = split("\n", $txtProperties);
                $lines = file($propertyFile); 
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

                        if ($key) $result[$key] = $value;
                        unset($lines[$i]);
                }
                return $result;
        }


function write_property($array, $file) {
    $content = '';
    foreach($array as $key => $val) {
	if ( $key ) {
	    $content .= "$key=".property_escape($val)."\n"; 
	} else {
	    $content .= "$val\n";
	}
    }
    safefilewrite($file, $content);
}

function property_escape($v) {
    return $v;
}

function safefilewrite($fileName, $dataToSave){
    if ($fp = fopen($fileName, 'w')) {
        $startTime = microtime();
        do {
           $canWrite = flock($fp, LOCK_EX);
           // If lock not obtained sleep for 0 - 100 milliseconds, to avoid collision and CPU load
           if(!$canWrite) usleep(round(rand(0, 100)*1000));
        } while ((!$canWrite)and((microtime()-$startTime) < 1000));

        //file was locked so now we can store information
        if ($canWrite){
            fwrite($fp, $dataToSave);
            flock($fp, LOCK_UN);
        }
        fclose($fp);
    }
}

$dict_entries = Array();

process_dir($path, TRUE);

?>
