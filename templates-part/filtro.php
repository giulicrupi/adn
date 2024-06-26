<div class="form-sec">
    <form action="<?php echo esc_url(home_url('/')); ?>" method="get" id="filter-form">
        <select name="produtos-bairro" id="bairro" onchange="this.form.submit()">
            <option >Local</option>
            <?php
            $terms = get_terms(array(
                'taxonomy' => 'produtos-bairro',
                'hide_empty' => false,
            ));
            
            foreach ($terms as $term) {

                echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
            }
            ?>
        </select>
    </form>
</div>
