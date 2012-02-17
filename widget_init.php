<?php
/*
Plugin Name: Simple Text Plugin
Plugin URI: http://www.example.com/textwidget
Description: An example plugin to demonstrate the basics of putting together a plugin in WordPress
Version: 0.1
Author: Tim Smith
Author URI: http://www.example.com
License: GPL2 

    Copyright 2011  Tim Smith

    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License,
    version 2, as published by the Free Software Foundation. 

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details. 

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA
    02110-1301  USA
*/

require_once "TextWidget.php";

add_action("widgets_init",
    function () { register_widget("TextWidget"); });
