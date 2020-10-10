<?php

class pluginTextarea extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'label'=>'Label',
			'text'=>''
		);
	}

	public function form()
	{
		global $L;

		$html  = '<div>';
		$html .= '<label>'.$L->get('Plugin label').'</label>';
		$html .= '<input name="label" id="jslabel" type="text" value="'.$this->getValue('label').'">';
		$html .= '</div>';

		$html .= '<div>';
		$html .= '<label>'.$L->get('Text').'</label>';
		$html .= '<textarea name="text" id="jstext">'.$this->getValue('text').'</textarea>';
		$html .= '</div>';

		return $html;
	}

	public function siteSidebar()
	{

	$about = $this->getValue('text');
	$about = htmlspecialchars_decode($about);

		$html  = '<div class="plugin plugin-about">';
		$html .= '<h2 class="plugin-label">'.$this->getValue('label').'</h2>';
		$html .= '<div class="plugin-content">';
		$html .= nl2br($about);
 		$html .= '</div>';
 		$html .= '</div>';

		return $html;
	}

}
