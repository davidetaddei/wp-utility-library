<?php

namespace WpUtilityLibrary;

class MetaService
{
    private $objectType;
    private $subtype;

    /**
     * MetaUtility constructor.
     */
    public function __construct($objectType = 'post', $subtype = 'componenti')
    {
        $this->objectType = $objectType;
        $this->subtype = $subtype;
    }

    /**
     * @param string $key
     * @param string $type
     * @param string $description
     */
    public function addMeta($key = '', $type = 'string', $description = '')
    {
        if (empty($key)) {
            return new \WP_Error(400, "missing meta key");
        } else {
            register_meta($this->objectType, $key, [
                'object_subtype' => $this->subtype,
                'type' => $type,
                'description' => $description,
                'single' => true,
                'show_in_rest' => true
            ]);
        }
    }
}
