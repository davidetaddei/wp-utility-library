<?php

namespace WpUtilityLibrary\Admin\Fields;

class Text implements UIField
{
	private $id;
	private $placeholder;

	/**
	 * Text constructor.
	 * @param $id
	 * @param $placeholder
	 * @param $domain
	 */
	public function __construct($id, $placeholder)
	{
		$this->id = $id;
		$this->placeholder = $placeholder;
	}

	public function render()
	{
		?>
		<input type="text" id="<?php echo $this->id ?>"
			   placeholder="<?php echo $this->placeholder ?>" name="<?php echo $this->id ?>"
			   value="<?php echo get_option($this->id); ?>"><br/>
		<?php
	}
}
