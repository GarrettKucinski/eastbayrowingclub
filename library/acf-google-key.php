<?php
    function my_acf_init() {

    	acf_update_setting('google_api_key', 'AIzaSyAkpxJOqMR2eVQk0v8OLy-uPvsqwzh7JYg');

    }

    add_action('acf/init', 'my_acf_init');
