
<?php $this->set('title_for_layout', "Nous contacter");?>
<?php echo $this->Form->create('Contact');?>
    <?php echo $this->Form->input('name', array('label'=>"Votre nom","required"));?>
     <?php echo $this->Form->input('email', array('label'=>"Votre email","type"=>"email","required"));?>
      <?php echo $this->Form->input('message', array('label'=>"Votre message", "type"=>"textarea","required"));?>
         <?php echo $this->Form->input('website', array('label'=>false, "type"=>"textarea","class"=>"hidden"));?>
<?php echo $this->Form->end ('Envoyer'); ?>