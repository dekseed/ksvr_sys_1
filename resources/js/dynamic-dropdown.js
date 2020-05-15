    $(function () {
        dynamicDropdown('/api/categories_eqm', '#cate_equipments');

        $('#cate_equipments').change(function () {
            let url = `/api/kinds/${this.value}`;
            let target = '#kinds';
            dynamicDropdown(url, target);
        });

        dynamicDropdown('/api/categories_waste', '#cate_waste');

        $('#cate_waste').change(function () {
            let url = `/api/wastes/${this.value}`;
            let target = '#wastes';
            dynamicDropdown(url, target);
        });
    });

    function dynamicDropdown(url, selector) {
        $.get(url, function (data) {
            let $select = $(selector);

            $select.find('option').not(':first').remove();

            let options = [];
            $.each(data, function (index, item) {
                options.push(`<option value="${item.id}">${item.name}</option>`);
            })
            $select.append(options);
        });
    }

    
// function dynamicDropdown2(url, selector) {
//     $.get(url, function (data) {
//         let $select = $(selector);

//         $select.find('option').not(':first').remove();

//         let options = [];
//         $.each(data, function (index, item) {
//             options.push(`<option value="${item.id}">${item.name}</option>`);
//         })
//         $select.append(options);
//     });
//}
