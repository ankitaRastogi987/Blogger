  $(document).ready(function() 
    {
      $('.cat').click(function()
      {
        var cat=$.trim($(this).text());
        console.log("value is :"+cat);
        $.ajax({
          url: 'cat',
          type: 'POST',
          data: {cat: cat},
        })
        .done(function(e) 
        {
          console.log("success");
          $('#cont').html("");
          $('#cont').html(e);
        })
        .fail(function() {
          console.log("error");
        })
      });
    });