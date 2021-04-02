<?php

namespace WpUtilityLibrary\Admin\Fields;

class Dropdown implements UIField
{
	private $id;
	private $domain;
	private $values;

	/**
	 * Text constructor.
	 * @param $id
	 * @param $label
	 * @param $values
	 * @param $domain
	 */
	public function __construct($id, $values, $domain)
	{
		$this->id = $id;
		$this->domain = $domain;
		$this->values = $values;
	}

	public function render()
	{
		$currentValue = get_option($this->id);
		if (!empty($currentValue))
			$currentValue = (int)$currentValue;
		?>
		<select id="<?php echo $this->id ?>" name="<?php echo $this->id ?>">
			<?php foreach ($this->values as $menu) { ?>
				<?php
				if ($currentValue === $menu->term_id) {
					$selected = ' selected="selected" ';
				} else {
					$selected = '';
				}
				?>
				<option <?php echo $selected ?>
					value="<?php echo $menu->term_id; ?>"><?php echo $menu->name; ?></option>
			<?php } ?>
		</select>
		<?php
	}
}
