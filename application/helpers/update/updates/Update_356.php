<?php

namespace LimeSurvey\Helpers\Update;

class Update_356 extends DatabaseUpdateBase
{
    public function up()
    {
        switch (\Yii::app()->db->driverName) {
            case 'sqlsrv':
            case 'dblib':
            case 'mssql':
                $this->db->createCommand("UPDATE {{boxes}} SET ico = 'icon-' + ico")->execute();
                break;
            default:
                $this->db->createCommand("UPDATE {{boxes}} SET ico = CONCAT('icon-', ico)")->execute();
                break;
        }
            // Only change label box if it's there.
            $labelBox = $this->db->createCommand(
                "SELECT * FROM {{boxes}} WHERE id = 5 AND position = 5 AND title = 'Label sets'"
            )->queryRow();
        if ($labelBox) {
            $this->db
                ->createCommand()
                ->update(
                    '{{boxes}}',
                    [
                        'title' => 'FormFlex Store',
                        'ico' => 'fa fa-cart-plus',
                        'desc' => 'FormFlex Extension Marketplace',
                        'url' => 'https://cloudservetechcentral.com/marketplace/'
                        // 'url' => 'https://account.limesurvey.org/limestore'
                    ],
                    'id = 5'
                );
        }
    }
}
