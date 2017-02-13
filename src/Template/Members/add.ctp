<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Members'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="members form large-9 medium-8 columns content">
    <?= $this->Form->create($member) ?>
    <fieldset>
        <legend><?= __('Add Member') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('middle_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('contact_number');
            echo $this->Form->input('birthday');
            echo $this->Form->input('email_address');
            echo $this->Form->input('facebook_name');
            echo $this->Form->input('complete_home_address');
            //echo $this->Form->input('campus');
            echo $this->Form->input('campus', ['options' => $memberCampuses]);
            
            
            echo $this->Form->input('area', [
                'type' => 'radio',
                'options' => [
                    ['value' => 'España', 'text' => 'España'],
                    ['value' => 'Intramuros', 'text' => 'Intramuros'],
                    ['value' => 'Mendiola', 'text' => 'Mendiola'],
                    ['value' => 'Sta Mesa', 'text' => 'Sta Mesa'],
                ],
                'templates' => [
                    'nestingLabel' => '{{hidden}}<label{{attrs}}>{{text}}</label>{{input}}',
                    'radioWrapper' => '<div class="radio">{{label}}</div>'
                    
                ]
            ]);
            
            
            
            
            //echo $this->Form->input('area');
            $options = [
                'Junior HS (Grade 7-10)' => 'Junior HS (Grade 7-10)', 
                'Senior High (Grade 11-12)' => 'Senior High (Grade 11-12)',
                'First Year' => 'First Year',
                'Second Year' => 'Second Year',
                'Third Year' => 'Third Year',
                'Fourth Year' => 'Fourth Year',
                'Fifth Year' => 'Fifth Year',
                'YP Volenteer' => 'YP Volenteer',
                'Staff' => 'Staff',
                'Other' => 'Other'
            ];
            //test
            echo $this->Form->input('year_level', ['type' => 'select', 'options' => $options,  'label' => __('Year Level')]);
            //echo $this->Form->select('year_level', $options, ['label' => __('Year Level'),'empty' => true]);
            $graduating = [
                'Yes' => 'Yes',
                'No' => 'No',
                'Not Applicable if YP or Staff' => 'Not Applicable if YP or Staff'
            ];
            echo $this->Form->input('graduating', ['type' => 'select', 'options' => $graduating,  'label' => __('Graduating')]);
            //echo $this->Form->input('graduating');
            $youth = [
                'Thursday 5pm'  =>    'Thursday 5pm',
                'Thursday 7pm'  =>     'Thursday 7pm',
                'Friday 3pm'    =>  'Firday 3pm',
                'Friday 5pm'    => 'Friday 5pm',
                'Friday 7pm'    => 'Friday 7pm',
                'Other'     => 'Other'
            ];
            echo $this->Form->input('youth_services_you_attend', ['type' => 'select', 'options' => $youth,  'label' => __('Youth Service you attend')]);
            //echo $this->Form->input('youth_services_you_attend');
            $ministry = [
                
                'Admin Support' =>  'Admin Support',
                'Communication' =>  'Communication',
                'Kids'  => 'Kids',
                'Music' => 'Music',
                'Production Design' =>  'Production Design',
                'Technical and Stage Management'    => 'Technical and Stage Management',
                'Ushering'  => 'Ushering',
                'None'  =>  'None'
            ];
            echo $this->Form->input('ministry_involvement', ['type' => 'select', 'options' => $ministry, 'multiple' => 'checkbox', 'label' => __('Ministry Involvement')]);
            //echo $this->Form->input('ministry_involvement');
            //echo $this->Form->select('ministry_involvement', $options, [
            //    'multiple' => 'checkbox',
            //    'label' => __('Ministry Involvement')
            //]);
            
            echo $this->Form->input('name_of_your_leadership_group');
            $this->Form->templates(
                ['dateWidget' => '{{month}}{{year}}']
              );
            echo $this->Form->input('one_2_one', ['type'=>'date']);
            
            //echo $this->Form->input('one_2_one');
            
            echo $this->Form->input('victory_weekend',['type'=>'date']);
            echo $this->Form->input('water_baptism',['type'=>'date']);
            echo $this->Form->input('making_disciples',['type'=>'date']);
            echo $this->Form->input('church_community',['type'=>'date']);
            echo $this->Form->input('foundation_class',['type'=>'date']);
            echo $this->Form->input('empowering_leaders',['type'=>'date']);
            echo $this->Form->input('leadership_113',['type'=>'date']);
            echo $this->Form->input('how_many_victory_groups_you_are_leading');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
