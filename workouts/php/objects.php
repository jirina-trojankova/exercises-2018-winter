<?php

// 1.
class computer
{
    // 2.
    public $model = null;
    public $operating_system = null;
    public $is_portable = false;
    public $status = 'off';

    // 6.
    public function switchOff()
    {
        $this->status = 'off';
    }

    // 7.
    public function toggleSwitch()
    {
        // $this->status = $this->status == 'on' ? 'off' : 'on'; 

        if($this->status == 'on')
        {
            $this->status = 'off';
        }
        else
        {
            $this->status = 'on';
        }
    }
}

// 3.
$my_computer = new computer();

// 4.
$my_computer->model = 'Lenovo Yoga';
$my_computer->operating_system = 'Windows 10';
$my_computer->is_portable = true;
$my_computer->status = 'on';

// 6.
$my_computer->switchOff();

// 7. 
$my_computer->toggleSwitch();

?>
<!-- 5. -->
<h1>My computer</h1>
<table>
    <tr><th>Model:</th><td><?= $my_computer->model; ?></td></tr>
    <tr><th>OS:</th><td><?= $my_computer->operating_system; ?></td></tr>
    <tr><th>Portable:</th>
        <td>
            <?= $my_computer->is_portable ? 'yes' : 'no'; ?>
        </td>
    </tr>
    <tr><th>Status:</th>
        <td>
            <?= $my_computer->status == 'on' ? 'switched on' : 'switched off'; ?>
        </td>
    </tr>
</table>