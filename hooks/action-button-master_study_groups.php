<?php

return '<a href="'.routeTo('crud/index',['table'=>'master_study_group_level','filter'=>['study_group_id' => $data->id]]).'" class="btn btn-sm btn-info"><i class="fas fa-eye"></i> '.__('master.label.level').'</a> ';