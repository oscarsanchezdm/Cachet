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
    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="BCS" autocomplete="off" onchange="checkbox_press('BCS',this)"> BCS
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="CSUC" autocomplete="off" onchange="checkbox_press('CSUC',this)"> CSUC
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="IEC" autocomplete="off" onchange="checkbox_press('IEC',this)"> IEC
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="UAB" autocomplete="off" onchange="checkbox_press('UAB',this)"> UAB
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="UB" autocomplete="off" onchange="checkbox_press('UB',this)"> UB
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="UdG" autocomplete="off" onchange="checkbox_press('UdG',this)"> UdG
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="UdL" autocomplete="off" onchange="checkbox_press('UdL',this)"> UdL
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="UOC" autocomplete="off" onchange="checkbox_press('UOC',this)"> UOC
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="UPC" autocomplete="off" onchange="checkbox_press('UPC',this)"> UPC
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="UPF" autocomplete="off" onchange="checkbox_press('UPF',this)"> UPF
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="URV" autocomplete="off" onchange="checkbox_press('URV',this)"> URV
    </label>

    <label class="btn btn-primary" name="filter" style="margin-bottom: 20px;">
        <input type="checkbox" style="display:none" value="UVic" autocomplete="off" onchange="checkbox_press('UVic',this)"> UVic
    </label>

</div>