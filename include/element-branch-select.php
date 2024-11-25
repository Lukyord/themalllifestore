<div class="select">
    <select name="" id="" class="select2 branch-select" data-placeholder="ALL BRANCHES">
        <?php
        $branch_arr = [
            "all" => "ALL BRANCHES",
            "bangkae" => "BANGKAE",
            "bangkapi" => "BANGKAPI",
            "ngamwongwan" => "NGAMWONGWAN",
            "thaphra" => "THAPHRA",
            "korat" => "KORAT",
        ];
        foreach ($branch_arr as $branch_id => $branch_name):
        ?>
            <option value="<?php echo $branch_id; ?>"><?php echo $branch_name; ?></option>
        <?php
        endforeach;
        ?>
    </select>
</div>