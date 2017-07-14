<?php

namespace RebelCode\WordPress;

/**
 * Something that has a label.
 *
 * @since [*next-version*]
 */
interface LabelAwareInterface
{
    /**
     * Retrieves the label.
     *
     * @since [*next-version*]
     *
     * @return string The label.
     */
    public function getLabel();
}
