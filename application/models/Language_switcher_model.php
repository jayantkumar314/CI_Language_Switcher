<?php 
/**
*LANGUAGE_SWITCHER_MODEL
*
*LISTS OF METHODS:
*@select_language @param $language : string
*@start_session @param $language : string
*@load_lang_files @param $lists : array, $language : string
*@load_lang_all_files @param $language : string
*@
*@
*@ 
*/
/**
* Receives language from the form.
*For now just hindi is set. So select only hindi in the form .
*/
class Language_switcher_model extends CI_Model
{
	/**
	*Receives the value of selected language from the form
	*/
	public function select_language($language)
	{
		echo 'You successfully changed your language to '.$language.'!'.'</br>';
	}

	/**
	*Starts the session for the language selected
	*/
	public function start_session($language)
	{

		$idiom = $this->session->get_userdata($language);
		print_r($idiom);
	}

	/**
	*@This loads the lists required of any particular language
	*For Example : calendar_lang, date_lang, etc.
	*@param 1 :array, 2 :string
	*For Example : (['date','db','email'], 'hindi')
	*/
	public function load_lang_files($lists, $language)
	{
		$this->lang->load($lists, $language);

	}

	/**
	*@This loads all lists required of any particular language
	*For Example : calendar_lang, date_lang, etc.
	*@param 1 :string
	*For Example : ('hindi')
	*/
	public function load_lang_all_files($language)
	{
		echo "string";
		$this->lang->load(['calendar','date','db','email','form_validation','ftp','imglib','migration','number','pagination','profiler','unit_test','upload'], $language);

	}
}