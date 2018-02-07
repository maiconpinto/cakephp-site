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
                        <h1 class="text-center"><?php echo $title ?></h1>
                        <center data-parsed=""> <img src="<?php echo $image ?>" align="center" class="float-center"> </center>
                        <table class="spacer">
                        <tbody>
                            <tr>
                            <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                            </tr>
                        </tbody>
                        </table>
                        <p class="lead"><?php echo $description ?></p>
                        <table class="row">
                        <tbody>
                            <tr>
                            <th class="small-12 large-12 columns">
                                <table>
                                <tr>
                                    <th>
                                    <h4><?php echo __('Get Involved'); ?>:</h4>
                                    <ul>
                                        <li><a href="<?php echo !empty($link_facebook) ? $link_facebook : '#';  ?>">Facebook</a></li>
                                        <li><a href="<?php echo !empty($link_twitter) ? $link_twitter : '#'; ?>">Twitter</a></li>
                                        <li><a href="<?php echo !empty($link_instagram) ? $link_instagram : '#'; ?>">Instagram</a></li>
                                    </ul>
                                    </th>
                                </tr>
                                </table>
                            </th>
                            </tr>
                        </tbody>
                        </table>
                        <p><small><?php echo __("You received this email because you're signed up to get updates from us."); ?> <?php echo $this->Html->link(__('Click here to unsubscribe.'), '/'); ?></small></p>
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