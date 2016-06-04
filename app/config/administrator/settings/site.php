<?php

return array(
    'title' => 'Site Settings',

    'edit_fields' => array(

        'site_name' => array(
            'title' => 'Name',
            'type' => 'text',
        )
    ),

    'before_save' => function(&$data)
    {
    },

    'actions' => array(
        //Ordering an item up
        'clear_page_cache' => array(
            'title' => 'Clear Page Cache',
            'messages' => array(
                'active' => 'Clearing cache...',
                'success' => 'Page Cache Cleared',
                'error' => 'There was an error while clearing the page cache',
            ),
            //the settings data is passed to the closure and saved if a truthy response is returned
            'action' => function (&$data) {
                Cache::forget('pages');

                return true;
            }
        ),


    ),


);