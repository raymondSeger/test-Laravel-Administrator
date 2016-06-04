<?php

return array(
    'title'     => 'Topics',

    'single'    => 'topic',

    'model'     => 'Topic',

    'columns'   => array(
        'name'      => array(
            'title'     => 'Name'
        )
    ),

    'edit_fields' => array(
        'name'  => array(
            'title' => 'Name',
            'type'  => 'text'
        )
    ),

    'global_actions' => array(
        //Create Excel Download
        'download_excel' => array(
            'title' => 'Download XLS',
            'messages' => array(
                'active' => 'Creating the spreadsheet...',
                'success' => 'Spreadsheet created! Downloading now...',
                'error' => 'There was an error while creating the spreadsheet',
            ),
            //the Eloquent query builder is passed to the closure
            'action' => function($query)
            {
                //get all the rows for this query
                $result = $query->get();

                //do something to put it into excel

                //return a download response
                return Response::download($filePath);
            }
        ),
    ),

);