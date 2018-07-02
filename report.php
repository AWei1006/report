<?php

class jqSimple extends jqGrid
{
    protected function init()
    {
        #Set database table
        $this->table = 'report';

        #Make all columns editable by default
        $this->cols_default = array('editable' => true);

        #Set columns
        $this->cols = array(

            'id' => array('label' => 'ID',
                'width' => 10,
                'align' => 'center',
                'editable' => false, //id is non-editable
            ),

            'StudentName' => array('label' => 'StudentName',
                'width' => 35,
                'editrules' => array('required' => true),
            ),

            'ParentsName' => array('label' => 'ParentsName',
                'width' => 35,
                'editrules' => array('required' => true),
            ),

            'Cousin' => array('label' => 'Cousin',
                'width' => 35,
                'editrules' => array('required' => true),
            ),

            'School' => array('label' => 'School',
                'width' => 40,
                'editrules' => array('required' => true),
            ),

            'Grade' => array('label' => 'Grade',
                'width' => 20,
                'editrules' => array('required' => true),
            ),

            'address' => array('label' => 'address',
                'width' => 40,
                'editrules' => array('required' => true),
            ),

            'phone' => array('label' => 'Phone',
                'width' => 25,
                'align' => 'center',
            ),

            'Ocontent' => array('label' => 'Ocontent',
                'width' => 40,
                'editrules' => array('required' => true),
            ),

            'Payment' => array('label' => 'Payment',
                'width' => 40,
                'editrules' => array('required' => true),
            ),

            'HVdate' => array('label' => 'HVdate',
                'width' => 20,
                'formatter' => 'numeric',
                'align' => 'center',
                'editable' => true,
            ),
        );

        #Set nav
        $this->nav = array('add' => true, 'edit' => true, 'del' => true, 'select' => true);

        #Add filter toolbar
        $this->render_filter_toolbar = true;
    }
}