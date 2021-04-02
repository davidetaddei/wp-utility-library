<?php

namespace WpUtilityLibrary\Admin\Fields;

class Text
{
    private $id;
    private $placeholder;
    private $domain;

    /**
     * Text constructor.
     * @param $id
     * @param $placeholder
     * @param $domain
     */
    public function __construct($id, $placeholder, $domain)
    {
        $this->id = $id;
        $this->placeholder = $placeholder;
        $this->domain = $domain;
    }

    public function render()
    {
        ?>
        <input type="text" id="<?php echo $this->id ?>"
               placeholder="<?php _e($this->placeholder, $this->domain); ?>" name="<?php echo $this->id ?>"
               value="<?php echo get_option($this->id); ?>"><br/>
        <?php
    }
}
