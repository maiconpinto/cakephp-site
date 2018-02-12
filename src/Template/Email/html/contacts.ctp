<style type="text/css" align="center" class="float-center">
    body,
    html,
    .body {
    background: #f3f3f3 !important;
    }
</style>
<table align="center" class="container float-center">
    <tbody>
    <tr>
        <td>
        <table class="spacer">
            <tbody>
            <tr>
                <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
            </tr>
            </tbody>
        </table>
        <table class="row">
            <tbody>
            <tr>
                <th class="small-12 large-12 columns first last">
                <table>
                    <tr>
                        <th>
                            <?php
                            if (!empty($image)) {
                                ?>
                                <center data-parsed=""> 
                                    <img src="<?php echo $image ?>" align="center" class="float-center"> 
                                </center>
                                <?php
                            }
                            ?>
                            <h1 class="text-center"><?php echo isset($title) ? $title : __('New email from contact') ?></h1>
                            
                            <p class="lead"><?php echo $email; ?></p>
                            <p class="lead"><?php echo $subject; ?></p>
                            <p class="lead"><?php echo $message; ?></p>
                            
                            <p><small><?php echo __("You are receiving this email because a new contact subscription has been registered"); ?></small></p>
                        </th>
                    </tr>
                </table>
                </th>
            </tr>
            </tbody>
        </table>
        </td>
    </tr>
    </tbody>
</table>