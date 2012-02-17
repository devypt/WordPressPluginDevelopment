<?php
class TextWidget extends WP_Widget
{
    public function __construct() {
        parent::__construct("text_widget", "Simple Text Widget",
            array("description" => "A simple widget to show how WP Plugins work"));
    }

    public function form($instance) {
        $title = "";
        $text = "";
        // if instance is defined, populate the fields
        if (!empty($instance)) {
            $title = $instance["title"];
            $text = $instance["text"];
        }

        $tableId = $this->get_field_id("title");
        $tableName = $this->get_field_name("title");
        echo '<label for="' . $tableId . '">Title</label><br/>';
        echo '<input id="' . $tableId . '" type="text" name="' .
            $tableName . '" value="' . $title . '"/><br/>';

        $textId = $this->get_field_id("text");
        $textName = $this->get_field_name("text");
        echo '<label for="' . $textId . '">Text</label><br/>';
        echo '<textarea id="' . $textId . '" name="' . $textName .
            '">' . $text . '</textarea>';
    }

    public function update($newInstance, $oldInstance) {
        $values = array();
        $values["title"] = htmlentities($newInstance["title"]);
        $values["text"] = htmlentities($newInstance["text"]);
        return $values;
    }

    public function widget($args, $instance) {
        $title = $instance["title"];
        $text = $instance["text"];

        echo "<h2>$title</h2>";
        echo "<p>$text</p>";
    }
}
