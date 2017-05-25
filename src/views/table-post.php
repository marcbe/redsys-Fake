<table class="table">
    <tbody>
        <?php foreach ($_POST as $key => $value) { ?>
        <tr>
            <th><?php echo $key; ?></th>
            <td><?php echo $value; ?></td>
        </tr>
        <?php } ?>

        <?php
        if (isset($_POST['Ds_MerchantParameters'])) {
            $parameters = json_decode(base64_decode($_POST['Ds_MerchantParameters']));
            foreach ($parameters as $key => $value) {
            ?>
            <tr>
                <th><?php echo $key; ?></th>
                <td><?php echo $value; ?></td>
            </tr>
            <?php
            }
        }
        ?>

        <?php if (isset($_POST['Ds_Merchant_Amount'])) { ?>
        <tr>
            <th>Total Import (Ds_Merchant_Amount)</th>
            <td><?php echo preg_replace('/([0-9]{2})$/', ',$1', $_POST['Ds_Merchant_Amount']); ?>&euro;</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
