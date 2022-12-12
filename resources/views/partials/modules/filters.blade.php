<div class="section-components" style="margin-top:0">
    <script>
        function disable_filter(filter) {
            const collection = document.getElementsByClassName(filter);
            for (let i = 0; i < collection.length; i++) {
                collection[i].style.display = 'none';
            }
        }
        
        function enable_filter(filter) {
            const collection = document.getElementsByClassName(filter);
            for (let i = 0; i < collection.length; i++) {
                collection[i].style.display = 'block';
            }
        } 

        function disable_all() {
            disable_filter("component");
        }

        function enable_all() {
            enable_filter("component");
        }

        function check_empty_groups(show) {
            const collection = document.getElementsByClassName("list-group");
            for (let i = 0; i < collection.length; i++) { //every iteration is a checkgroup
                // show or hide component group
                if (show) {
                    collection[i].childNodes[2].classList.remove('hide');
                } else {
                    collection[i].childNodes[2].classList.add('hide');
                }
                count = 0;
                for (let j = 0; j < collection[i].childNodes[2].querySelectorAll('li').length; j++) {
                    if (collection[i].childNodes[2].querySelectorAll('li')[j].style.display !== "none") {
                        count = count + 1;
                    }
                }
                if (count < 1) {
                    collection[i].style.display = 'none';
                } else {
                    collection[i].style.display = 'block';
                }
            }
        }

        function checkbox_press(filter, checkbox) {
            if (checkbox.checked == true){
                enable_only_filter(filter)
                //disable other checkboxes 
                const collection = document.getElementsByName("filter");
                for (let i = 0; i < collection.length; i++) {
                    collection[i].classList.add('disabled');
                    collection[i].style.pointerEvents = 'none';
                }
                checkbox.parentElement.classList.remove('disabled');
                checkbox.parentElement.style.pointerEvents = 'auto';
            } else {
                reset_filter()
                //enable other checkboxes 
                const collection = document.getElementsByName("filter");
                for (let i = 0; i < collection.length; i++) {
                    collection[i].classList.remove('disabled');
                    collection[i].style.pointerEvents = 'auto';
                }
            }
        }

        function enable_only_filter(filter) {
            disable_all();
            enable_filter(filter);
            check_empty_groups(true);
        }

        function reset_filter() {
            enable_all();
            check_empty_groups(false);
        }
        
    </script>
    <?php
    $values = array('CSUC', 'UAB', 'UB', 'UdG', 'UdL', 'UOC', 'UPC', 'UPF', 'URV', 'UVic');

    foreach ($values as $value) {
        echo '<label class="btn btn-primary" name="filter" style="margin-bottom: 20px; margin-right: 4px;">';
        echo '<input type="checkbox" style="display:none" value="' . $value . '" autocomplete="off" onchange="checkbox_press(\'' . $value . '\',this)"> ' . $value;
        echo '</label>';
    }
    ?>
</div>