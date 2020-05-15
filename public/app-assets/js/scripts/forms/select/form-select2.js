/*=========================================================================================
    File Name: form-select2.js
    Description: Select2 is a jQuery-based replacement for select boxes.
    It supports searching, remote data sets, and pagination of results.
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function(window, document, $) {
	'use strict';

  // Basic Select2 select
	$(".select2").select2({
    // the following code is used to disable x-scrollbar when click in select input and
    // take 100% width in responsive also
    dropdownAutoWidth: true,
    width: '100%'
  });

    // Select With Icon
    $(".select2-icons").select2({
        dropdownAutoWidth: true,
        width: '100%',
        minimumResultsForSearch: Infinity,
        templateResult: iconFormat,
        templateSelection: iconFormat,
        escapeMarkup: function(es) { return es; }
    });

    // Format icon
    function iconFormat(icon) {
        var originalOption = icon.element;
        if (!icon.id) { return icon.text; }
        var $icon = "<i class='" + $(icon.element).data('icon') + "'></i>" + icon.text;

        return $icon;
    }


    // Limiting the number of selections
    $(".max-length").select2({
      dropdownAutoWidth: true,
      width: '100%',
      maximumSelectionLength: 2,
      placeholder: "Select maximum 2 items"
    });


    // Programmatic access
    var $select = $(".js-example-programmatic").select2({
      dropdownAutoWidth: true,
      width: '100%'
    });
    var $selectMulti = $(".js-example-programmatic-multi").select2();
    $selectMulti.select2({
      dropdownAutoWidth: true,
      width: '100%',
      placeholder: "Programmatic Events"
    });
    $(".js-programmatic-set-val").on("click", function () { $select.val("CA").trigger("change"); });

    $(".js-programmatic-open").on("click", function () { $select.select2("open"); });
    $(".js-programmatic-close").on("click", function () { $select.select2("close"); });

    $(".js-programmatic-init").on("click", function () { $select.select2(); });
    $(".js-programmatic-destroy").on("click", function () { $select.select2("destroy"); });

    $(".js-programmatic-multi-set-val").on("click", function () { $selectMulti.val(["CA", "AL"]).trigger("change"); });
    $(".js-programmatic-multi-clear").on("click", function () { $selectMulti.val(null).trigger("change"); });

    // Loading array data
    var data = [
        { id: 0, text: 'enhancement' },
        { id: 1, text: 'bug' },
        { id: 2, text: 'duplicate' },
        { id: 3, text: 'invalid' },
        { id: 4, text: 'wontfix' }
    ];

    $(".select2-data-array").select2({
      dropdownAutoWidth: true,
      width: '100%',
      data: data
    });

var data1 = [{
        id: '1',
        text: 'นาย'
    },
    {
        id: '2',
        text: 'นาง'
    },
    {
        id: '3',
        text: 'นางสาว'
    },
    {
        id: '4',
        text: 'พันเอก'
    },
    {
        id: '5',
        text: 'พันเอกหญิง'
    },
    {
        id: '6',
        text: 'พันโท'
    },
    {
        id: '7',
        text: 'พันโทหญิง'
    },
    {
        id: '8',
        text: 'พันตรี'
    },
    {
        id: '9',
        text: 'พันตรีหญิง'
    },
    {
        id: '10',
        text: 'ร้อยเอก'
    },
    {
        id: '11',
        text: 'ร้อยเอกหญิง'
    },
    {
        id: '12',
        text: 'ร้อยโท'
    },
    {
        id: '13',
        text: 'ร้อยโทหญิง'
    },
    {
        id: '14',
        text: 'ร้อยตรี'
    },
    {
        id: '15',
        text: 'ร้อยตรีหญิง'
    },
    {
        id: '16',
        text: 'จ่าสิบเอก'
    },
    {
        id: '17',
        text: 'จ่าสิบเอกหญิง'
    },
    {
        id: '18',
        text: 'จ่าสิบโท'
    },
    {
        id: '19',
        text: 'จ่าสิบโทหญิง'
    },
    {
        id: '20',
        text: 'จ่าสิบตรี'
    },
    {
        id: '21',
        text: 'จ่าสิบตรีหญิง'
    },
    {
        id: '22',
        text: 'สิบเอก'
    },
    {
        id: '23',
        text: 'สิบเอกหญิง'
    },
    {
        id: '24',
        text: 'สิบโท'
    },
    {
        id: '25',
        text: 'สิบโทหญิง'
    },
    {
        id: '26',
        text: 'สิบตรี'
    },
    {
        id: '27',
        text: 'สิบตรีหญิง'
    },

];

$(".select2-data-array-title_name").select2({
    dropdownAutoWidth: true,
        width: '100%',
    data: data1
});



var position = [{
        id: 'แพทย์',
        text: 'แพทย์'
    },
    {
        id: 'พยาบาล',
        text: 'พยาบาล'
    },
    {
        id: 'ผู้ช่วยพยาบาล',
        text: 'ผู้ช่วยพยาบาล'
    },
    {
        id: 'นายสิบพยาบาล',
        text: 'นายสิบพยาบาล'
    },
    {
        id: 'เภสัชกร',
        text: 'เภสัชกร'
    },
    {
        id: 'ทันตแพทย์',
        text: 'ทันตแพทย์'
    },
    {
        id: 'ลูกจ้างประจำ',
        text: 'ลูกจ้างประจำ'
    },
    {
        id: 'ลูกจ้างชั่วคราว',
        text: 'ลูกจ้างชั่วคราว'
    },
    {
        id: 'พนักงานราชการ',
        text: 'พนักงานราชการ'
    },

];

$(".select2-data-array-position").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: position
});

var gender = [{
        id: '1',
        text: 'ชาย'
    },
    {
        id: '2',
        text: 'หญิง'
    },

];

$(".select2-data-array-gender").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: gender
});



var data2 = [{
        id: '1',
        text: 'ทันตกรรม'
    },
    {
        id: '2',
        text: 'ฉุกเฉิน'
    },
    {
        id: '3',
        text: 'X-Ray'
    },
    {
        id: '4',
        text: 'ซักรีด'
    },
    {
        id: '5',
        text: 'ทะเบียน'
    },
    {
        id: '6',
        text: 'หอผู้ป่วยนอก'
    },
    {
        id: '7',
        text: 'ศูนย์ผู้ป่วยใน'
    },
    {
        id: '8',
        text: 'เภสัชกรรม'
    },
    {
        id: '9',
        text: 'หอผู้ป่วยใน'
    },
    {
        id: '10',
        text: 'ศูนย์คอมพิวเตอร์'
    },
    {
        id: '11',
        text: 'องค์พยาบาล'
    },
    {
        id: '12',
        text: 'ห้องผ่าตัด'
    },
    {
        id: '13',
        text: 'กายภาพบำบัด'
    },
    {
        id: '15',
        text: 'แพทย์ทางเลือก (นวดแผนไทย)'
    },
     {
         id: '14',
         text: 'แพทย์ทางเลือก (ฝั่งเข็ม)'
     },
    {
        id: '16',
        text: 'แพทย์ทางเลือก (สปา)'
    },

    {
        id: '17',
        text: 'LAB'
    },
    {
        id: '18',
        text: 'จ่ายกลาง'
    },
    {
        id: '19',
        text: 'สูทกรรม'
    },
    {
        id: '20',
        text: 'ซักรีด'
    },
    {
        id: '21',
        text: 'ศูนย์เด็กเล็กฯ'
    },
    {
        id: '22',
        text: 'ศูนย์ส่งเสริมสุขภาพฯ'
    },
    {
        id: '23',
        text: 'ส่งกำลังและบริการ'
    },
    {
        id: '24',
        text: 'หมวดพลเสนารักษ์'
    },
    {
        id: '25',
        text: 'ธุรการ'
    },
    {
        id: '26',
        text: 'การเงิน'
    },
    {
        id: '27',
        text: 'พลาธิการ'
    },
    {
        id: '28',
        text: 'จุดคัดกรองฯ'
    },
    {
        id: '29',
        text: 'ยุทธโยธา'
    },
    {
        id: '30',
        text: 'เจาะเลือด'
    },
];

$(".select2-data-array-dep").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: data2
});

var data3 = [{
        id: 'นาย',
        text: 'นาย'
    },
    {
        id: 'นาง',
        text: 'นาง'
    },
    {
        id: 'นางสาว',
        text: 'นางสาว'
    },
];

$(".select2-data-array-title-name").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: data3
});

//สถานภาพ
var data_status = [{
        id: 'โสด',
        text: 'โสด'
    },
    {
        id: 'สมรส',
        text: 'สมรส'
    },
    {
        id: 'หม้าย',
        text: 'หม้าย'
    },
    {
        id: 'หย่า',
        text: 'หย่า'
    },
    {
        id: 'แยกกันอยู่',
        text: 'แยกกันอยู่'
    },
];

$(".select2-data-array-data-status").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: data_status
});

// หมู่เลือด
var data4 = [{
        id: 'หมู่เอ (A)',
        text: 'หมู่เอ (A)'
    },
    {
        id: 'หมู่บี (B)',
        text: 'หมู่บี (B)'
    },
    {
        id: 'หมู่โอ (O)',
        text: 'หมู่โอ (O)'
    },
    {
        id: 'หมู่เอบี (AB)',
        text: 'หมู่เอบี (AB)'
    },
];

$(".select2-data-array-blood_type").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: data4
});

//อำเภอ
var amphoes = [

    {
        id: '1',
        text: 'อำเภอเมือง'
    },
    {
        id: '2',
        text: 'กุสุมาลย์'
    },
    {
        id: '3',
        text: 'กุดบาก'
    },
    {
        id: '4',
        text: 'พรรณานิคม'
    },
    {
        id: '5',
        text: 'พังโคน'
    },
    {
        id: '6',
        text: 'วาริชภูมิ'
    },
    {
        id: '7',
        text: 'นิคมน้ำอูน'
    },
    {
        id: '8',
        text: 'วานรนิวาส'
    },
    {
        id: '9',
        text: 'คำตากล้า'
    },
    {
        id: '10',
        text: 'บ้านม่วง'
    },
    {
        id: '11',
        text: 'อากาศอำนวย'
    },
    {
        id: '12',
        text: 'สว่างแดนดิน'
    },
    {
        id: '13',
        text: 'ส่องดาว'
    },
    {
        id: '14',
        text: 'เต่างอย'
    },
    {
        id: '15',
        text: 'โคกศรีสุพรรณ'
    },
    {
        id: '16',
        text: 'เจริญศิลป์'
    },
    {
        id: '17',
        text: 'โพนนาแก้ว'
    },
    {
        id: '18',
        text: 'ภูพาน'
    },



];

$(".select2-data-array-amphoes").select2({
    dropdownAutoWidth: true,
    width: '100%',
    data: amphoes
});

    // Loading remote data
    $(".select2-data-ajax").select2({
        dropdownAutoWidth: true,
        width: '100%',
        ajax: {
        url: "https://api.github.com/search/repositories",
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term, // search term
            page: params.page
          };
        },
        processResults: function (data, params) {
          // parse the results into the format expected by Select2
          // since we are using custom formatting functions we do not need to
          // alter the remote JSON data, except to indicate that infinite
          // scrolling can be used
          params.page = params.page || 1;

          return {
            results: data.items,
            pagination: {
              more: (params.page * 30) < data.total_count
            }
          };
        },
        cache: true
      },
      placeholder: 'Search for a repository',
      escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
      minimumInputLength: 1,
      templateResult: formatRepo,
      templateSelection: formatRepoSelection
  });

    function formatRepo (repo) {
      if (repo.loading) return repo.text;

      var markup = "<div class='select2-result-repository clearfix'>" +
        "<div class='select2-result-repository__avatar'><img src='" + repo.owner.avatar_url + "' /></div>" +
        "<div class='select2-result-repository__meta'>" +
          "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";

      if (repo.description) {
        markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
      }

      markup += "<div class='select2-result-repository__statistics'>" +
        "<div class='select2-result-repository__forks'><i class='icon-code-fork mr-0'></i> " + repo.forks_count + " Forks</div>" +
        "<div class='select2-result-repository__stargazers'><i class='icon-star5 mr-0'></i> " + repo.stargazers_count + " Stars</div>" +
        "<div class='select2-result-repository__watchers'><i class='icon-eye mr-0'></i> " + repo.watchers_count + " Watchers</div>" +
      "</div>" +
      "</div></div>";

      return markup;
    }

    function formatRepoSelection (repo) {
      return repo.full_name || repo.text;
    }


    // Customizing how results are matched
    function matchStart (term, text) {
      if (text.toUpperCase().indexOf(term.toUpperCase()) === 0) {
        return true;
      }

      return false;
    }

    $.fn.select2.amd.require(['select2/compat/matcher'], function (oldMatcher) {
      $(".select2-customize-result").select2({
        dropdownAutoWidth: true,
        width: '100%',
        placeholder: "Search by 'r'",
        matcher: oldMatcher(matchStart)
      });
    });

    // Theme support
    $(".select2-theme").select2({
      dropdownAutoWidth: true,
      width: '100%',
      placeholder: "Classic Theme",
      theme: "classic"
    });


    // Sizing options

    // Large
    $('.select2-size-lg').select2({
        dropdownAutoWidth: true,
        width: '100%',
        containerCssClass: 'select-lg'
    });

    // Small
    $('.select2-size-sm').select2({
        dropdownAutoWidth: true,
        width: '100%',
        containerCssClass: 'select-sm'
    });

    // Color Options

    // Background Color
    $('.select2-bg').each(function(i, obj) {
      var variation = "",
      textVariation = "",
      textColor = "";
      var color = $(this).data('bgcolor');
      variation = $(this).data('bgcolor-variation');
      textVariation = $(this).data('text-variation');
      textColor = $(this).data('text-color');
      if(textVariation !== ""){
        textVariation = " "+textVariation;
      }
      if(variation !== ""){
        variation = " bg-"+variation;
      }
      var className = "bg-"+color + variation + " " + textColor + textVariation + " border-"+color + ' border-darken-2 ';

      $(this).select2({
        dropdownAutoWidth: true,
        width: '100%',
        containerCssClass: className
      });
    });

    // Border Color
    $('.select2-border').each(function(i, obj) {
      var variation = "",
      textVariation = "",
      textColor = "";
      var color = $(this).data('border-color');
      textVariation = $(this).data('text-variation');
      variation = $(this).data('border-variation');
      textColor = $(this).data('text-color');
      if(textVariation !== ""){
        textVariation = " "+textVariation;
      }
      if(variation !== ""){
        variation = " border-"+variation;
      }

      var className = "border-"+color + " " +variation + " " + textColor + textVariation;

      $(this).select2({
        dropdownAutoWidth: true,
        width: '100%',
        containerCssClass: className
      });
    });

    // Full Background Color
    $('.select2-full-bg').each(function(i, obj) {
      var variation = "",
      textVariation = "",
      textColor = "";
      var color = $(this).data('bgcolor');
      variation = $(this).data('bgcolor-variation');
      textVariation = $(this).data('text-variation');
      textColor = $(this).data('text-color');
      if(variation !== ""){
        variation = " bg-"+variation;
      }
      if(textVariation !== ""){
        textVariation = " "+textVariation;
      }
      var className = "bg-"+color + variation + " " + textColor + textVariation + " border-"+color + ' border-darken-2 ';

      $(this).select2({
        dropdownAutoWidth: true,
        width: '100%',
        containerCssClass: className,
        dropdownCssClass: className
      });
    });

    $('select[data-text-color]').each(function(i, obj) {
      var text = $(this).data('text-color'),textVariation;
      textVariation = $(this).data('text-variation');
      if(textVariation !== ""){
        textVariation = " "+textVariation;
      }
      $(this).next(".select2").find(".select2-selection__rendered").addClass(text+textVariation);
    });

})(window, document, jQuery);
