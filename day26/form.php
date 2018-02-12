<?php

/**
 * exercise on static methods - creating a form library
 */
class form
{
    /**
     * generates a select field
     * 
     * generates select field, puts options inside, chooses the right option
     * adds additional HTML code
     * 
     * @param $name - string, name attribute of the <select>
     * @param $options - array of options where keys are value attributes and 
     *                   values are labels, eg. [123 => 'foo', 456 => 'bar']
     * @param $selected - value within the options that should be initially selected
     * @param $attributes - string with HTML attributes (eg. onclick, class, id) that
     *                      should be appended to the end of the opening <select> tag
     * @return string - HTML code for the select field
     */
    public static function select($name, $options, $selected, $attributes)
    {
        $html = '<select name="' . $name . '" ' . $attributes . '>'; // <select name="foo" id="bar">

        // loop through the array of options
        foreach($options as $value => $label)
        {
            //$html .= '<option value="' .$value. '" ' .($value == $selected ? ' selected' : ''). ">" .$label. '</option>';

            $html .= '<option value="' .$value. '" '; // <option value="bar" 
            $html .= ($value == $selected ? ' selected' : ''); // selected
            $html .= ">";   // >
            $html .= $label; // Bar
            $html .= '</option>'; // </option>
        }

        $html .= '</select>';
        // $html = $html . '</select>'; // same as above

        return $html;
    }
}

$sample = [
    1 => 'One',
    2 => 'Two',
    3 => 'Three',
    4 => 'Four',
    5 => 'Five'
];

?>

<?php $it_is_raining = true; ?>


<?php echo 'Today I will wear ' . ($it_is_raining ? 'a coat' : 'a swimsuit') . ' to town'; ?>





<?php $selected_number = 2; ?>

<form action="">

    <select name="number" id="">
        <option value="1"<?php if($selected_number == 1) echo ' selected'; ?>>One</option>
        <option value="2"<?php echo ' selected' ?>>Two</option>
        <option value="3"<?php if($selected_number == 3) echo ' selected'; ?>>Three</option>
    </select>

    <?php
        echo form::select(
            'number', 
            [
                'red' => 'Red', 
                'blue' => 'Blue', 
                'green' => 'Green'
            ], 
            'blue', 
            'id=""'
        ); 
    ?>



</form>
