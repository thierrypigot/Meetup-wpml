<?php
/**
*	WPML - Language selector
*	Thierry Pigot
*	
*	return html
**/
function tp_get_language_selector_flags()
{
    $languages = icl_get_languages('skip_missing=0');
	
    if(!empty($languages))
	{
		$html = '<div id="language-selector-flags"><ul>';
			
			foreach( $languages as $langue )
			{
				if( !$langue['active'] )
					$html .= '<li><a href="'. $langue['url'] .'" title="'. $langue['translated_name'] .'"><img src="'. $langue['country_flag_url'] .'" alt="'. $langue['language_code'] .'" /></a></li>';
			}

		$html .= '</ul></div>';
		
		return $html;
    }
	return false;
}

/**
*	WPML - Language selector
*	Thierry Pigot
*	
*	echo tp_get_language_selector_flags()
**/
function tp_the_language_selector_flags()
{
	echo tp_get_language_selector_flags();
}