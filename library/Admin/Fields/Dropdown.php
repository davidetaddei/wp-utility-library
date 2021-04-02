<?php

namespace WpUtilityLibrary\Admin\Fields;

class Dropdown implements UIField
{
	private $id;
	private $values;

	const ID = 'id';
	const NAME = 'name';

	/**
	 * Text constructor.
	 * @param $id
	 * @param $values
	 */
	public function __construct($id, $values)
	{
		$this->id = $id;
		$this->values = $values;
	}

	public function render()
	{
		$currentValue = get_option($this->id);
		if(!empty($currentValue))
			$currentValue = (int)$currentValue;
		?>
		<select id="<?php echo $this->id ?>" name="<?php echo $this->id ?>" class="wp-utility-library-admin-dropdown">
			<?php foreach ($this->values as $value) { ?>
				<?php
				if ($currentValue === $value[self::ID]) {
					$selected = ' selected="selected" ';
				} else {
					$selected = '';
				}
				?>
				<option <?php echo $selected ?> value="<?php echo $value[self::ID]; ?>"><?php echo $value[self::NAME]; ?></option>
			<?php } ?>
		</select>
		<?php
	}
}
