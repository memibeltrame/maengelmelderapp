
    $(function(){
        // PUT YOUR JAVASCRIPT HERE BELOW

        // Datepicker
        $('.input-group.date, .date').datepicker({
            language: "en",
            orientation: "auto left",
            format: "dd.mm.yyyy",
            autoclose: true,
            todayHighlight: true
        });

        //livesearch example
        $('.typeahead').typeahead({
              source: ['foo bar','foo fighters','a fools errand','football'],
              limit: 10,
              updater: function(item){
                // Do things when selected
                // console.log(item);
                return item;
              }
        });


        $(document).bind('keydown','alt+r', function(){

            var url = window.location.href;
            var get = "session_renew=true";
            var start = "?";
            if (url.indexOf("?") >= 0){
                start = "&";
            }
            window.location.href = url+start+get;
        });

        $("#socialsecurity").mask("99-99-9999",{placeholder:"__-__-____"});

    })