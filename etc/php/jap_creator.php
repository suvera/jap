<?php
require_once(__DIR__ . '/php_functions.php');

$funcs = array(
'addcslashes', 'addslashes', 'bin2hex', 'chr', 'chunk_split', 'convert_cyr_string', 'convert_uudecode', 'convert_uuencode', 'count_chars', 'crc32', 'crypt', 'explode', 'fprintf', 'get_html_translation_table', 'hebrev', 'hebrevc', 'hex2bin', 'html_entity_decode', 'htmlentities', 'htmlspecialchars_decode', 'htmlspecialchars', 'implode', 'lcfirst', 'levenshtein', 'localeconv', 'ltrim', 'md5_file', 'md5', 'metaphone', 'money_format', 'nl_langinfo', 'nl2br', 'number_format', 'ord', 'parse_str', 'print', 'printf', 'quoted_printable_decode', 'quoted_printable_encode', 'quotemeta', 'rtrim', 'setlocale', 'sha1_file', 'sha1', 'similar_text', 'soundex', 'sprintf', 'sscanf', 'str_getcsv', 'str_ireplace', 'str_pad', 'str_repeat', 'str_replace', 'str_rot13', 'str_shuffle', 'str_split', 'str_word_count', 'strcasecmp', 'strcmp', 'strcoll', 'strcspn', 'strip_tags', 'stripcslashes', 'stripos', 'stripslashes', 'stristr', 'strlen', 'strnatcasecmp', 'strnatcmp', 'strncasecmp', 'strncmp', 'strpbrk', 'strpos', 'strrchr', 'strrev', 'strripos', 'strrpos', 'strspn', 'strstr', 'strtok', 'strtolower', 'strtoupper', 'strtr', 'substr_compare', 'substr_count', 'substr_replace', 'substr', 'trim', 'ucfirst', 'ucwords', 'vfprintf', 'vprintf', 'vsprintf', 'wordwrap'
);


function get_data_type($type) {
    if ($type == 'number') {
        return 'int';
    }

    return $type;
}

function get_default_val($type) {
    switch($type) {
        case 'int';
            return '0';
            break;
            
        case 'float';
            return '0.00';
            break;
            
        case 'bool';
            return 'false';
            break;
        
        default:
            return '""';
            break;
    }
}
$className = 'str';


$file = array();

$file[] = 'package system;';
$file[] = '';

$file[] = 'class ' . $className . ' {';
$tab = '    ';
foreach ($funcs as $func) {
    $func = trim($func);
    
    $def = $php_functions[$func];
    $type = get_data_type($def['type']);
    
    $line = $tab . 'public static ' . $type . ' ' . $func . '(';
    
    foreach ($def['args'] as $arg) {
        $argType = get_data_type($arg['type']);
        $line .= $argType . ' ' . str_replace(array('&'), '', $arg['name']);
        if ($arg['required'] == false) {
            $line .= ' = ' . get_default_val($argType);
        }
        
        $line .= ', ';
    }
    
    $line = rtrim(rtrim($line), ',');
    
    $line .= ') {';
    
    $file[] = $line;
    
    if ($def['type'] != 'void') {
        $file[] = $tab . $tab . 'return ' . get_default_val($type) . ';';
    }
    
    $file[] = $tab . '}';
    
    $file[] = '';
}

$file[] = '}';

file_put_contents(__DIR__ . '/jap/system/' . $className . '.jap', implode("\n", $file) . "\n");


