<?php
    $http_lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
    // Lenguajes que soportamos:
    $available_languages = array("en", "es");
    // Array con los idiomas
    $langs = prefered_language($available_languages, $_SERVER["HTTP_ACCEPT_LANGUAGE"]);
    // Mostramos el array
    $lang=key($langs);

    function prefered_language(array $available_languages, $http_lang) {

        $available_languages = array_flip($available_languages);
    
        $langs = [];
    
        preg_match_all('~([\w-]+)(?:[^,\d]+([\d.]+))?~', strtolower($http_lang), $matches, PREG_SET_ORDER);
    
        foreach($matches as $match) {
    
            list($a) = explode('-', $match[1]) + array('', '');
            $value = isset($match[2]) ? (float) $match[2] : 1.0;
    
            if(isset($available_languages[$match[1]])) {
                $langs[$match[1]] = $value;
                continue;
            }
    
            if(isset($available_languages[$a])) {
                $langs[$a] = $value - 0.1;
            }
        }
    
        arsort($langs);
        return $langs;
    
    }
?>